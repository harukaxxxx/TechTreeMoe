//change img when option changed
$('.mixitup select').on('change', function() {
  var ship = this.name;
  var ship_img = this.value;
  if (ship_img.substring(8) == 0) {
    var origin = 'origin';
  } else {
    var origin = 'web';
  }
  $('#' + ship + ' img').fadeOut(400, function() {
    $('#' + ship + ' img').attr(
      'src',
      'assets/images/ship_previews_' + origin + '/' + ship_img + '.png'
    );
  });
  $('#' + ship + ' img').fadeIn(400);
});

//local storage init
var store = $.AMUI.store;
if (!store.enabled) {
  alert('您的瀏覽器不支援本地儲存功能，儲存紀錄功能將不可用！');
}

/**
 * Download function
 */
function submit() {
  //progress start
  $.AMUI.progress.start();
  $('#submit').button('loading');

  //generate zip structure
  let zip = new JSZip();
  let ship_previews = zip.folder('gui/ship_previews');
  let ship_previews_ds = zip.folder('gui/ship_previews_ds');

  // packing files to zip
  let selectedList = $('.mixitup select');
  for (let i = 0; i < selectedList.length; i++) {
    const imageID = selectedList[i].value;
    if (imageID.substring(8) != 0) {
      let imageFile = $.get('assets/images/ship_previews/' + imageID + '.png');
      ship_previews.file(imageID.substring(0, 7) + '.png', imageFile);
      let imageFileDS = $.get(
        'assets/images/ship_previews/' + imageID + '.png'
      );
      ship_previews_ds.file(imageID.substring(0, 7) + '.png', imageFileDS);
    }
  }

  // download zip
  zip
    .generateAsync({
      type: 'blob'
    })
    .then(function(content) {
      saveAs(content, 'res_mod.zip');

      //progress done
      $.AMUI.progress.done();
      $('#submit').button('reset');
    });
}

/**
 * Mix it up
 */
var mixer = mixitup('#Container', {
  callbacks: {
    onMixBusy: function(state) {
      $('.loader_bg').fadeIn(500);
    },
    onMixEnd: function(state) {
      $.AMUI.progress.done();
      $('.loader_bg').fadeOut(500);
    },
    onMixStart: function(state, futureState) {
      $.AMUI.progress.start();
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
});

mixer.show().then(function(state) {
  //default data
  var intList = [];
  var selectedList = $('.mixitup select');
  var c = selectedList.length;
  for (var i = 0; i < c; i++) {
    var value = selectedList[i].value;
    intList.push(value);
  }
  store.set('intList', intList);

  //restore data
  function restore(list) {
    var save = store.get(list);
    save.forEach(function(option) {
      var id = option.substring(0, 7);
      $('#' + id + ' select')
        .find(':selected')
        .attr('selected', false);
      var options = $('#' + id + ' select').find('option');
      var oc = options.length;
      for (var k = 0; k < oc; k++) {
        if (options.eq(k).val() == option) {
          options.eq(k).prop('selected', true);
        }
      }
    }, this);
  }
});

// filter button
function filterReset() {
  mixer.filter('all');
  $('.filter-group label').removeClass('am-active');
}
$(function() {
  var $options = $('.filter-group .options');
  var $nation = $('[name="nation"]');
  var $type = $('[name="type"]');
  var $extra = $('[name="extra"]');
  $options.on('change', function() {
    var nation = $nation.filter(':checked').val();
    var type = $type.filter(':checked').val();
    var extra = $extra.filter(':checked').val();
    var filter = '';
    if (nation != undefined) {
      var filter = filter + nation;
    }
    if (type != undefined) {
      var filter = filter + type;
    }
    if (extra != undefined) {
      var filter = filter + extra;
    }
    mixer.filter(filter);
  });
});

//custom scrollbar
$(window).on('load', function() {
  $('.am-scrollable-vertical').mCustomScrollbar({
    theme: 'minimal-dark'
  });
});

//set default
function reset() {
  if (confirm('這將清空你的儲存選擇並回復到預設！確定要回復嗎？')) {
    store.clear();
    location.reload();
  }
}

//random intro bg
if (Math.random() >= 0.5) {
  $('.intro').css('background-image', 'url(assets/images/intro_bg/left/intro_bg' + Math.floor(Math.random() * 2 + 1) + '.jpg)').css('background-position', 'left');
} else {
  $('.intro').css('background-image', 'url(assets/images/intro_bg/right/intro_bg' + Math.floor(Math.random() * 4 + 1) + '.jpg)').css('background-position', 'right');
}

//multilang
var langCode = navigator.language;
var langs = ['zh-TW', 'zh-CN', 'en-US', 'ja'];

function lang(langCode) {
  $.getJSON('langs/' + langCode + '.json', function(jsonData) {
    $.each($('[tkey]'), function(jkey) {
      var tkey = $('[tkey]')
        .eq(jkey)
        .attr('tkey');
      var tval = jsonData[tkey];
      $('[tkey]')
        .eq(jkey)
        .html(tval);
    });
  });
}

// Int page lang
if ($.inArray(langCode, langs) >= 0 && langCode != 'zh-TW') {
  lang(langCode);

  for (var i = 0; i < 4; i++) {
    var code = $('footer select')
      .find('option')
      .eq(i)
      .val();
    if (code == langCode) {
      $('footer select')
        .find('option')
        .eq(i)
        .attr('selected', true);
    } else {
      $('footer select')
        .find('option')
        .eq(i)
        .attr('selected', false);
    }
  }
}

//change language
$('footer select').change(function() {
  var langCode = $('footer select').val();
  lang(langCode);
});

/**
 * Update log
 */
const content = document.querySelector('#updateLog').content;
$.getJSON('assets/update.json', function(updateData) {
  $.each(updateData, function(key, updateData) {

    // set time & level
    switch (updateData['level']) {
      case 'IMPORTANT':
        content.querySelector('span').classList +=
          'am-badge am-radius am-badge-danger';
        content.querySelector('span').innerHTML = 'IMPORTANT';
        content.querySelector('small').innerHTML = updateData['time'];
        content.querySelector('small').classList = 'am-text-danger';
        break;
      case 'NEW':
        content.querySelector('span').classList +=
          'am-badge am-radius am-badge-primary';
        content.querySelector('span').innerHTML = 'NEW';
        content.querySelector('small').innerHTML = updateData['time'];
        content.querySelector('small').classList = 'am-text-primary';
        break;
      case 'UPDATE':
        content.querySelector('span').classList +=
          'am-badge am-radius am-badge-success';
        content.querySelector('span').innerHTML = 'UPDATE';
        content.querySelector('small').innerHTML = updateData['time'];
        content.querySelector('small').classList = 'am-text-success';
        break;
      case 'FIX':
        content.querySelector('span').classList +=
          'am-badge am-radius am-badge-warning';
        content.querySelector('span').innerHTML = 'FIX';
        content.querySelector('small').innerHTML = updateData['time'];
        content.querySelector('small').classList = 'am-text-warning';
        break;
    }

    content.querySelector('.logs').innerHTML = '';
    for (var i = 0; i < updateData['event'].length; i++) {
      content.querySelector('.logs').innerHTML +=
        '<li>' + updateData['event'][i] + '</li>';
    }

    document
      .querySelector('.update .am-list')
      .prepend(document.importNode(content, true));
  });
});

/**
 * statistics
 */
var today = new Date()
var dd = today.getDate()
var mm = today.getMonth() + 1
var yyyy = today.getFullYear()

if (dd < 10) {
  dd = '0' + dd
}

if (mm < 10) {
  mm = '0' + mm
}
$('.today').text(yyyy + '年' + mm + '月' + dd + '日')
$('.month').text(yyyy + '年' + mm + '月')

/**
 * eChart
 */
$.getJSON('assets/database/complete.json', function(json) {
  var nObj = Object.keys(json);
  var doneData = [];
  var nationData = [];

  for (var i = 0; i < nObj.length; i++) {
    var nation = nObj[i];
    var data = json[nation];
    var percent = Math.round(data[0] / data[1] * 100);
    doneData.push(percent);

    switch (nation) {
      case 'commonwealth':
        nation = '聯邦';
        break;
      case 'france':
        nation = '法國';
        break;
      case 'germany':
        nation = '德國';
        break;
      case 'italy':
        nation = '義大利';
        break;
      case 'japan':
        nation = '日本';
        break;
      case 'panasia':
        nation = '泛亞';
        break;
      case 'poland':
        nation = '波蘭';
        break;
      case 'uk':
        nation = '英國';
        break;
      case 'usa':
        nation = '美國';
        break;
      case 'ussr':
        nation = '蘇聯';
        break;
    }
    nationData.push(nation);
  }

  var nationCompleteChart = echarts.init(
    document.getElementById('nationComplete')
  );

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
  };
  nationCompleteChart.setOption(option);
});

$.getJSON('assets/database/records.json', function(json) {
  var data = json['daily'];

  var dateList = $.map(data, function(value, index) {
    var y = index.substring(0, 4);
    var m = index.substring(6, 4);
    var d = index.substring(8, 6);
    return [y + '/' + m + '/' + d];
  });
  var valueList = $.map(data, function(value, index) {
    return [value];
  });

  var dailyDownloadChart = echarts.init(document.getElementById('daily'));
  var maxValue = Math.max.apply(Math, valueList);

  option = {
    // Make gradient line here
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
  };

  dailyDownloadChart.setOption(option);
});