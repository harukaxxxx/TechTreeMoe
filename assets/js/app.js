//ship box generater
function generater() {
    const nationList = ["commonwealth", "france", "germany", "italy", "japan", "panasia", "poland", "uk", "usa", "ussr"];
    nationList.forEach(nation => {
        $.get('assets/database/nationShips/' + nation + '.json')
            .then((response) => {
                $.each(response, function (index) {
                    $.get('assets/database/shipJSON/' + index.toUpperCase() + '.json')
                        .done(function (shipData) {

                            //set box ID & data order
                            const content = document.querySelector('#shipBox').content;
                            content.querySelector('div').setAttribute('id', shipData['id'])
                            content.querySelector('div').setAttribute('data-order', shipData['id'])

                            //set box class
                            if (shipData['premium']) { var premium = 'premium' } else { var premium = '' }
                            if (shipData['change']) { var change = 'change' } else { var change = '' }
                            let boxClassList = ['mix', shipData['type'], shipData['nation'], premium, change]
                            content.querySelector('div').classList = boxClassList.join(' ')

                            //set box title & tier icon
                            content.querySelector('p').classList = 'ship icon-' + shipData['type']
                            content.querySelector('p').innerHTML = '<span class="tier">' + shipData['tier'] + '</span>' + shipData['name']

                            //set box image
                            content.querySelector('img').src = 'assets/images/ship_previews/' + shipData['id'].toUpperCase() + '-' + shipData['default'] + '.png'

                            //set box select
                            content.querySelector('select').setAttribute('name', shipData['id'])
                            content.querySelector('select').innerHTML = '<optgroup label="戰艦世界"><option value=' + shipData['id'] + '-0>【戰艦世界】' + shipData['name'] + '</option></optgroup>'

                            // set box select options
                            const bandList = ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', '高校艦隊', '最終戰艦', '同人作品', 'November', '蒼藍鋼鐵戰艦', 'Victory Belles']
                            const defaultOption = shipData['default']
                            for (let bandIndex = 0; bandIndex < bandList.length; bandIndex++) {
                                const band = bandList[bandIndex];
                                if (shipData[band]) {
                                    let optgroup = ['<optgroup label="' + band + '">']
                                    $.each(shipData[band], function (optID, optName) {
                                        if (defaultOption == optID) { var selected = ' selected' } else { var selected = '' }
                                        optgroup.push('<option value=' + shipData['id'] + '-' + optID + selected + '>' + optName + '</option>')
                                    });
                                    optgroup.push('</optgroup>')
                                    content.querySelector('select').innerHTML += optgroup.join('')
                                }
                            }

                            //append ship box
                            document.querySelector('#Container').appendChild(
                                document.importNode(content, true)
                            );

                            // generate select 
                            $('#' + shipData['id'] + ' select').selected('enable')

                        })
                })

            })
    })
}

//change img whem optio
$('.mixitup select').on('change', function () {
    var ship = this.name
    var ship_img = this.value
    if (ship_img.substring(8) == 0) { var origin = 'origin' } else { var origin = 'web' }
    $('#' + ship + ' img').fadeOut(400, function () {
        $('#' + ship + ' img').attr("src", "assets/images/ship_previews_" + origin + "/" + ship_img + ".png")
    })
    $('#' + ship + ' img').fadeIn(400)
})

//local storage init
var store = $.AMUI.store
if (!store.enabled) {
    alert('您的瀏覽器不支援本地儲存功能，儲存紀錄功能將不可用！')
}

//get selected
var img_list = []

function submit() {
    //progress bar start
    $.AMUI.progress.start()

    //generate file name list
    var selectedList = $('.mixitup select')
    var c = selectedList.length
    for (var i = 0; i < c; i++) {
        var value = selectedList[i].value
        if (value.substring(8) != 0) {
            img_list.push(value)
        }
    }
    console.log(img_list)
    $.AMUI.progress.done()
}

// download button
$('#submit').click(function () {
    var $btn = $(this)
    $btn.button('loading')
    setTimeout(function () {
        $btn.button('reset')
    }, 5000)
})

// mixItUp
var mixer = mixitup('#Container', {
    callbacks: {
        onMixBusy: function (state) {
            $('.loader_bg').fadeIn(500)
        },
        onMixEnd: function (state) {
            $.AMUI.progress.done()
            $('.loader_bg').fadeOut(500)
        },
        onMixStart: function (state, futureState) {
            $.AMUI.progress.start()
        }
    },
    animation: {
        "duration": 300,
        "nudge": true,
        "effects": "fade scale(0.5)"
    },
    load: {
        sort: 'order:asc'
    }
})

mixer.show()
    .then(function (state) {
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
            save.forEach(function (option) {
                var id = option.substring(0, 7)
                $("#" + id + " select").find(":selected").attr('selected', false)
                var options = $("#" + id + " select").find('option')
                var oc = options.length
                for (var k = 0; k < oc; k++) {
                    if (options.eq(k).val() == option) {
                        options.eq(k).prop('selected', true)
                    }
                }
            }, this)
        }
        if (document.location.search != "?mmm" && store.get('list') != undefined) {
            restore('list')
        } else if (document.location.search == "?mmm" && store.get('mlist') != undefined) {
            restore('mlist')
        }
    })

// filter button
function filterReset() {
    console.log('filter reset')
    mixer.filter('all')
    $('.filter-group label').removeClass('am-active')
}
$(function () {
    var $options = $('.filter-group .options')
    var $nation = $('[name="nation"]')
    var $type = $('[name="type"]')
    var $extra = $('[name="extra"]')
    $options.on('change', function () {
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
        mixer.filter(filter)
    })
})

//custom scrollbar
$(window).on("load", function () {
    $(".am-scrollable-vertical").mCustomScrollbar({
        theme: "minimal-dark"
    })
})

//slider
$(function () {
    $('.am-slider').flexslider({
        slideshowSpeed: 6000,
        animationSpeed: 800,
        initDelay: 4000
    })
})

//set default
function reset() {
    if (confirm("這將清空你的儲存選擇並回復到預設！確定要回復嗎？")) {
        store.clear()
        location.reload()
    }
}

//random intro bg
$(function () {
    if (Math.random() >= 0.5) {
        $('.intro').css("background-image", "url(assets/images/intro_bg/left/intro_bg" + Math.floor(Math.random() * 2 + 1) + ".jpg)").css("background-position", "left")
    } else {
        $('.intro').css("background-image", "url(assets/images/intro_bg/right/intro_bg" + Math.floor(Math.random() * 4 + 1) + ".jpg)").css("background-position", "right")
    }
})

//multilang
var langCode = navigator.language
var langs = ["zh-TW", "zh-CN", "en-US", "ja"]

function lang(langCode) {
    $.getJSON('langs/' + langCode + '.json', function (jsonData) {
        $.each($("[tkey]"), function (jkey) {
            var tkey = $("[tkey]").eq(jkey).attr('tkey')
            var tval = jsonData[tkey]
            $("[tkey]").eq(jkey).html(tval)
        })
    })
}

// Int page lang
if ($.inArray(langCode, langs) >= 0 && langCode != "zh-TW") {
    lang(langCode)

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
$("footer select").change(function () {
    var langCode = $("footer select").val()
    lang(langCode)
})

//charts
$.getJSON("assets/database/complete.json", function (json) {
    var nObj = Object.keys(json)
    var doneData = []
    var nationData = []

    for (var i = 0; i < nObj.length; i++) {
        var nation = nObj[i]
        var data = json[nation]
        var percent = Math.round(data[0] / data[1] * 100)
        doneData.push(percent)

        switch (nation) {
            case 'commonwealth':
                nation = "聯邦"
                break
            case 'france':
                nation = "法國"
                break
            case 'germany':
                nation = "德國"
                break
            case 'italy':
                nation = "義大利"
                break
            case 'japan':
                nation = "日本"
                break
            case 'panasia':
                nation = "泛亞"
                break
            case 'poland':
                nation = "波蘭"
                break
            case 'uk':
                nation = "英國"
                break
            case 'usa':
                nation = "美國"
                break
            case 'ussr':
                nation = "蘇聯"
                break
        }
        nationData.push(nation)

    }

    var nationCompleteChart = echarts.init(document.getElementById("nationComplete"))


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

})

$.getJSON("assets/database/records.json", function (json) {
    var data = json['daily']

    var dateList = $.map(data, function (value, index) {
        var y = index.substring(0, 4)
        var m = index.substring(6, 4)
        var d = index.substring(8, 6)
        return [y + '/' + m + '/' + d]
    })
    var valueList = $.map(data, function (value, index) {
        return [value]
    })

    var dailyDownloadChart = echarts.init(document.getElementById("daily"))
    var maxValue = Math.max.apply(Math, valueList)

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
            splitLine: { show: false }
        },
        dataZoom: [{
            startValue: '2017/09/04'
        }, {
            type: 'inside'
        }],
        series: {
            name: '下載數',
            type: 'line',
            showSymbol: true,
            data: valueList
        }
    }

    dailyDownloadChart.setOption(option)

})