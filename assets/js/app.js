//change img when option changed
$('.mixitup select').on('change', function() {
  var ship = this.name
  var ship_img = this.value
  if (ship_img.substring(8) == 0) {
    var origin = 'origin'
  } else {
    var origin = 'web'
  }
  $('#' + ship + ' img').fadeOut(400, function() {
    $('#' + ship + ' img').attr('src', 'assets/images/ship_previews_' + origin + '/' + ship_img + '.png')
  })
  $('#' + ship + ' img').fadeIn(400)
})

//random intro bg
if (Math.random() >= 0.5) {
  $('.intro').css('background-image', 'url(assets/images/intro_bg/left/intro_bg' + Math.floor(Math.random() * 2 + 1) + '.jpg)').css('background-position', 'left')
} else {
  $('.intro').css('background-image', 'url(assets/images/intro_bg/right/intro_bg' + Math.floor(Math.random() * 4 + 1) + '.jpg)').css('background-position', 'right')
}


/**
 * Download function
 */
function submit() {

  //progress start
  $.AMUI.progress.start()
  $('#submit').button('loading')

  //generate zip structure
  let zip = new JSZip()
  let ship_previews = zip.folder('gui/ship_previews')
  let ship_previews_ds = zip.folder('gui/ship_previews_ds')

  // generate image list
  let previewImages = []
  let previewImages_ds = []
  let selectedList = $('.mixitup select')
  for (let i = 0; i < selectedList.length; i++) {
    previewImages.push('assets/images/ship_previews/' + $('.mixitup select')[i].value + '.png')
    previewImages_ds.push('assets/images/ship_previews_ds/' + $('.mixitup select')[i].value + '.png')
  }

  // for loader loop
  var index = 0
  var index_ds = 0

  // loader
  function loadAsArrayBuffer(url, callback) {
    $.AMUI.progress.inc(0.01);
    var xhr = new XMLHttpRequest()
    xhr.open("GET", url)
    xhr.responseType = "arraybuffer"
    xhr.onerror = function() {
      console.debug('xhr ERROR!!')
    }
    xhr.onload = function() {
      if (xhr.status === 200) {
        callback(xhr.response, url)
      } else {
        console.debug('xhr load ERROR!!')
      }
    }
    xhr.send()
  }

  // looping buff and download
  (function load() {
    if (index < previewImages.length) {
      loadAsArrayBuffer(previewImages[index++], function(buffer, url) {
        var filename = getFilename(url)
        ship_previews.file(filename, buffer)
        load()
      })
    } else if (index_ds < previewImages_ds.length) {
      loadAsArrayBuffer(previewImages_ds[index_ds++], function(buffer, url) {
        var filename = getFilename(url)
        ship_previews_ds.file(filename, buffer)
        load()
      })
    } else {
      zip.generateAsync({
        type: "blob"
      }).then(function(content) {
        saveAs(content, 'res_mod.zip')

        //progress done
        $.AMUI.progress.done()
        $('#submit').button('reset')
      })
    }
  })()

  // setting file name
  function getFilename(url) {
    return url.substr(url.lastIndexOf("/") + 1, 7) + '.png'
  }
}


/**
 * Mix it up
 */
var mixer = mixitup('#Container', {
  callbacks: {
    onMixBusy: function(state) {
      $('.loader_bg').fadeIn(500)
    },
    onMixStart: function(state, futureState) {
      $.AMUI.progress.start()
    },
    onMixEnd: function(state) {
      $.AMUI.progress.done()
      $('.loader_bg').fadeOut(500)
    }
  },
  animation: {
    duration: 300,
    nudge: true,
    effects: 'fade scale(0.5)'
  },
  load: {
    sort: 'order:asc'
  }
})


/*
 * local storage
 */
var store = $.AMUI.store
if (!store.enabled) {
  alert('您的瀏覽器不支援本地儲存功能，儲存紀錄功能將不可用！')
}

mixer.show().then(function(state) {
  //default data
  var intList = []
  var selectedList = $('.mixitup select')
  var c = selectedList.length
  for (var i = 0; i < c; i++) {
    var value = selectedList[i].value
    intList.push(value)
  }
  store.set('intList', intList)

  //restore data
  function restore(list) {
    var save = store.get(list)
    save.forEach(function(option) {
      var id = option.substring(0, 7)
      $('#' + id + ' select')
        .find(':selected')
        .attr('selected', false)
      var options = $('#' + id + ' select').find('option')
      var oc = options.length
      for (var k = 0; k < oc; k++) {
        if (options.eq(k).val() == option) {
          options.eq(k).prop('selected', true)
        }
      }
    }, this)
  }
})


/*
 * filter button
 */
$(window).on('load', function() {
  var $options = $('.filter-group .options')
  var $nation = $('[name="nation"]')
  var $type = $('[name="type"]')
  var $extra = $('[name="extra"]')
  $options.on('change', function() {
    var nation = $nation.filter(':checked').val()
    var type = $type.filter(':checked').val()
    var extra = $extra.filter(':checked').val()
    var filter = ''
    if (nation != undefined) {
      var filter = filter + nation
    }
    if (type != undefined) {
      var filter = filter + type
    }
    if (extra != undefined) {
      var filter = filter + extra
    }
    console.log(filter)
    mixer.filter(filter)
  })
})

//filter all
function filterReset() {
  $('.filter-group .options').filter(':checked').val('')
  mixer.filter('')
  mixer.filter('all')
  $('.filter-group label').removeClass('am-active')
}

//set default
function reset() {
  if (confirm('這將清空你的儲存選擇並回復到預設！確定要回復嗎？')) {
    store.clear()
    location.reload()
  }
}


/*
 * multi language
 */
var langCode = navigator.language
var langs = ['zh-TW', 'zh-CN', 'en-US', 'ja']

function lang(langCode) {
  $.getJSON('assets/langs/' + langCode + '.json', function(jsonData) {
    $.each($('[tkey]'), function(jkey) {
      var tkey = $('[tkey]').eq(jkey).attr('tkey')
      var tval = jsonData[tkey]
      $('[tkey]').eq(jkey).html(tval)
      if (tval == undefined) {
        console.error($('[tkey]').eq(jkey).text() + ' don\'t have translate content!!\n' + tval);
      }
      console.debug('Translate ' + $('[tkey]').eq(jkey).text() + ' to ' + tval)
    })
  })
}

// Int page lang
if ($.inArray(langCode, langs) >= 0 && langCode != 'zh-TW') {
  lang(langCode)

  // language button changeing
  for (var i = 0; i < 4; i++) {
    var code = $('footer select').find('option').eq(i).val()
    if (code == langCode) {
      $('footer select').find('option').eq(i).attr('selected', true)
    } else {
      $('footer select').find('option').eq(i).attr('selected', false)
    }
  }
}

//change language
$('footer select').change(function() {
  var langCode = $('footer select').val()
  lang(langCode)
})


/**
 * Update log
 */
const content = document.querySelector('#updateLog').content
$.getJSON('assets/update.json', function(updateData) {
  $.each(updateData, function(key, updateData) {

    // set time & level
    switch (updateData['level']) {
      case 'IMPORTANT':
        content.querySelector('span').classList += 'am-badge am-radius am-badge-danger'
        content.querySelector('span').innerHTML = 'IMPORTANT'
        content.querySelector('small').innerHTML = updateData['time']
        content.querySelector('small').classList = 'am-text-danger'
        break;
      case 'NEW':
        content.querySelector('span').classList += 'am-badge am-radius am-badge-primary'
        content.querySelector('span').innerHTML = 'NEW'
        content.querySelector('small').innerHTML = updateData['time']
        content.querySelector('small').classList = 'am-text-primary'
        break;
      case 'UPDATE':
        content.querySelector('span').classList += 'am-badge am-radius am-badge-success'
        content.querySelector('span').innerHTML = 'UPDATE'
        content.querySelector('small').innerHTML = updateData['time']
        content.querySelector('small').classList = 'am-text-success'
        break;
      case 'FIX':
        content.querySelector('span').classList += 'am-badge am-radius am-badge-warning'
        content.querySelector('span').innerHTML = 'FIX'
        content.querySelector('small').innerHTML = updateData['time']
        content.querySelector('small').classList = 'am-text-warning'
        break;
    }

    content.querySelector('.logs').innerHTML = ''
    for (var i = 0; i < updateData['event'].length; i++) {
      content.querySelector('.logs').innerHTML +=
        '<li>' + updateData['event'][i] + '</li>'
    }

    document.querySelector('.update .am-list').prepend(document.importNode(content, true))
  })
})

//custom scrollbar
$(window).on('load', function() {
  $('.am-scrollable-vertical').mCustomScrollbar({
    theme: 'minimal-dark'
  })
})


/*
 * line chart & statistics
 * past data = before 2018 01 10
 * hide when 2020 10 06
 */
const pastData = [
  ["20170904", 1],
  ["20170905", 10],
  ["20170907", 5],
  ["20170908", 13],
  ["20170909", 3],
  ["20170910", 24],
  ["20170911", 5],
  ["20170912", 3],
  ["20170913", 3],
  ["20170914", 9],
  ["20170915", 7],
  ["20170916", 3],
  ["20170917", 4],
  ["20170918", 2],
  ["20170919", 8],
  ["20170920", 12],
  ["20170921", 20],
  ["20170922", 10],
  ["20170923", 19],
  ["20170924", 6],
  ["20170925", 4],
  ["20170926", 7],
  ["20170927", 1],
  ["20170928", 10],
  ["20170929", 2],
  ["20170930", 6],
  ["20171001", 8],
  ["20171002", 9],
  ["20171003", 1],
  ["20171004", 10],
  ["20171005", 11],
  ["20171006", 8],
  ["20171007", 25],
  ["20171008", 5],
  ["20171009", 8],
  ["20171010", 7],
  ["20171011", 5],
  ["20171012", 6],
  ["20171013", 13],
  ["20171014", 8],
  ["20171015", 18],
  ["20171016", 6],
  ["20171017", 6],
  ["20171018", 13],
  ["20171019", 13],
  ["20171020", 10],
  ["20171022", 4],
  ["20171024", 1],
  ["20171026", 7],
  ["20171027", 9],
  ["20171028", 9],
  ["20171029", 1],
  ["20171031", 1],
  ["20171101", 2],
  ["20171102", 2],
  ["20171103", 5],
  ["20171104", 4],
  ["20171105", 3],
  ["20171106", 1],
  ["20171107", 6],
  ["20171108", 2],
  ["20171109", 9],
  ["20171110", 11],
  ["20171111", 11],
  ["20171112", 4],
  ["20171113", 3],
  ["20171114", 4],
  ["20171116", 3],
  ["20171117", 4],
  ["20171118", 5],
  ["20171119", 3],
  ["20171120", 4],
  ["20171121", 2],
  ["20171122", 6],
  ["20171123", 4],
  ["20171124", 8],
  ["20171125", 9],
  ["20171127", 6],
  ["20171128", 10],
  ["20171129", 6],
  ["20171130", 10],
  ["20171201", 10],
  ["20171202", 14],
  ["20171203", 7],
  ["20171204", 4],
  ["20171205", 6],
  ["20171206", 6],
  ["20171207", 7],
  ["20171209", 26],
  ["20171210", 4],
  ["20171212", 15],
  ["20171213", 3],
  ["20171214", 9],
  ["20171215", 6],
  ["20171216", 10],
  ["20171217", 4],
  ["20171218", 3],
  ["20171219", 4],
  ["20171220", 3],
  ["20171221", 5],
  ["20171222", 7],
  ["20171223", 6],
  ["20171224", 16],
  ["20171227", 1],
  ["20171228", 5],
  ["20171229", 2],
  ["20171230", 2],
  ["20171231", 12],
  ["20180101", 2],
  ["20180102", 8],
  ["20180104", 12],
  ["20180105", 7],
  ["20180106", 13],
  ["20180107", 11],
  ["20180108", 3],
  ["20180109", 8]
]

// date init
var today = new Date()
var dd = ('0' + today.getDate()).substr(-2)
var mm = ('0' + today.getMonth() + 1).substr(-2)
var yyyy = today.getFullYear()

function charts(gaData) {
  var totalDownload = 0
  var monthDownload = 0
  var yesterdayDownload = 0

  let dateData = pastData.concat(gaData)
  let dateList = []
  let valueList = []
  for (let i = 0; i < dateData.length; i++) {

    // line chart datas
    let y = dateData[i][0].substring(0, 4)
    let m = dateData[i][0].substring(6, 4)
    let d = dateData[i][0].substring(8, 6)
    dateList.push(y + '/' + m + '/' + d)
    valueList.push(dateData[i][1])

    // yesterday data
    if (dateData[i][0] == yyyy + mm + (dd - 1)) {
      var yesterdayDownload = yesterdayDownload + Number(dateData[i][1])
    }

    // this month data
    if (dateData[i][0].substring(0, 6) == yyyy + mm) {
      var monthDownload = monthDownload + Number(dateData[i][1])
    }

    // total download data
    var totalDownload = totalDownload + Number(dateData[i][1])
  }

  // month download generate
  $('#yesterdayDownload').text(yesterdayDownload + '次')
  $('.yesterday').text(yyyy + '年' + mm + '月' + (dd - 1) + '日')

  // month download generate
  $('#monthDownload').text(monthDownload + '次')
  $('.month').text(yyyy + '年' + mm + '月')

  // total download generate
  $('#totalDownload').text(totalDownload + '次')

  // line chart generate
  const dailyDownloadChart = echarts.init(document.getElementById('daily'))
  const maxValue = Math.max.apply(Math, valueList)

  option = {
    // gradient line
    visualMap: {
      show: false,
      type: 'continuous',
      seriesIndex: 0,
      min: 0,
      max: maxValue
    },
    tooltip: {
      trigger: 'axis'
    },
    xAxis: {
      data: dateList
    },
    yAxis: {
      splitLine: {
        show: false
      }
    },
    dataZoom: [{
        startValue: '2017/09/04'
      },
      {
        type: 'inside'
      }
    ],
    series: {
      name: '下載數',
      type: 'line',
      showSymbol: true,
      data: valueList
    }
  }

  //line chart generate
  dailyDownloadChart.setOption(option)
}


/*
 * complete percent bar
 */
function completeBar() {
  var totalComplete = 0
  var doneComplete = 0

  //data compute
  $.each(completeData, function(key, value) {
    doneComplete += value[0]
    totalComplete += value[1]
  })
  var completePercent = Math.round(doneComplete / totalComplete * 100)

  //complete bar generate
  $('.am-progress-bar').attr('style', 'width:' + completePercent + '%')
  $('.am-progress-bar').text(completePercent + '%')
}


/**
 * complete chart
 */
function completeChart() {
  var nObj = Object.keys(completeData)
  var doneData = []
  var nationData = []

  for (var i = 0; i < nObj.length; i++) {
    var nation = nObj[i]
    var data = completeData[nation]
    var percent = Math.round(data[0] / data[1] * 100)
    doneData.push(percent)

    switch (nation) {
      case 'commonwealth':
        nation = '聯邦(Commonwealth)'
        break;
      case 'france':
        nation = '法國(France)'
        break;
      case 'germany':
        nation = '德國(Germany)'
        break;
      case 'italy':
        nation = '義大利(Italia)'
        break;
      case 'japan':
        nation = '日本(Japan)'
        break;
      case 'panasia':
        nation = '泛亞(Pan-Asia)'
        break;
      case 'poland':
        nation = '波蘭(Poland)'
        break;
      case 'uk':
        nation = '英國(Great Britain)'
        break;
      case 'usa':
        nation = '美國(USA)'
        break;
      case 'ussr':
        nation = '蘇聯(USSR)'
        break;
    }
    nationData.push(nation)
  }

  var nationCompleteChart = echarts.init(
    document.getElementById('nationComplete')
  )

  option = {
    tooltip: {
      trigger: 'axis',
      axisPointer: {
        type: 'shadow'
      }
    },
    grid: {
      left: '3%',
      right: '4%',
      bottom: '3%',
      top: '3%',
      containLabel: true
    },
    xAxis: {
      type: 'value',
      scale: true,
      min: 0,
      max: 100
    },
    yAxis: {
      type: 'category',
      data: nationData.reverse()
    },
    series: [{
      name: '完成數(%)',
      type: 'bar',
      label: {
        normal: {
          show: true,
          position: 'insideRight',
          formatter: '{c}%'
        }
      },
      data: doneData.reverse()
    }]
  }

  nationCompleteChart.setOption(option)
}