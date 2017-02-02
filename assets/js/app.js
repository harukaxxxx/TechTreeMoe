//change img whem option
$('.mixitup select').on('change', function() {
    var ship = this.name
    var ship_img = this.value;
    $('#' + ship + ' img').fadeOut(400, function() {
        $('#' + ship + ' img').attr("src", "images/ship_previews_web/" + ship_img + ".png");
    })
    $('#' + ship + ' img').fadeIn(400);
});

//get selected
var img_list = [];

function submit() {
    //progress bar start
    $.AMUI.progress.start();

    //generate file name list
    var selectedList = $('.mixitup select');
    var c = selectedList.length;
    for (var i = 0; i < c; i++) {
        var value = selectedList[i].value;
        img_list.push(value);

    }

    //request download
    $.post("", {
                img_list
            },
            function(data) {
                if (document.location.search == "?mmm") {
                    Cookies.set('mlist', img_list, { expires: 1095 });
                } else {
                    Cookies.set('list', img_list, { expires: 1095 });
                }
                $("body").append("<iframe src='./assets/php/zip.php?url=" + img_list + "' style='display: none;'></iframe>");
            })
        .done(function() {
            $.AMUI.progress.done();
        })

}

// mixItUp
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
    load: {
        filter: 'none'
    },
    animation: {
        effects: 'fade scale stagger(50ms)',
        duration: 400,
        easing: 'ease'
    }
});

mixer.show()
    .then(function(state) {
        //default data
        var intList = [];
        var selectedList = $('.mixitup select');
        var c = selectedList.length;
        for (var i = 0; i < c; i++) {
            var value = selectedList[i].value;
            intList.push(value);
        }
        Cookies.set('intList', intList);

        //restore data
        function restore(list) {
            var cookie = Cookies.getJSON(list);
            cookie.forEach(function(option) {
                var id = option.substring(0, 7);
                $("#" + id + " select").find(":selected").attr('selected', false);
                var options = $("#" + id + " select").find('option');
                var oc = options.length
                for (var k = 0; k < oc; k++) {
                    if (options.eq(k).val() == option) {
                        options.eq(k).prop('selected', true);
                    }
                }
            }, this);
        }
        if (document.location.search != "?mmm" && Cookies.get('list') != undefined) {
            restore('list');
        } else if (document.location.search == "?mmm" && Cookies.get('mlist') != undefined) {
            restore('mlist');
        };
    });

//custom scrollbar
$(window).on("load", function() {
    $(".am-scrollable-vertical").mCustomScrollbar({
        theme: "minimal-dark"
    });
});

//slider
$(function() {
    $('.am-slider').flexslider({
        slideshowSpeed: 6000,
        animationSpeed: 800,
        initDelay: 4000
    });
});

//set default
function reset() {
    if (confirm("這將清空你的儲存選擇並回復到預設！確定要回復嗎？")) {
        Cookies.remove('list');
        Cookies.remove('mlist');
        location.reload();
    }
}

//mmm
$(function() {
    if (document.location.search == "?mmm") {
        $("#mmm").children().removeClass('am-icon-toggle-off').addClass('am-icon-toggle-on');
        var imageURL = "url(./images/mmm_bg/mmm_bg" + Math.floor(Math.random() * 19 + 1) + ".jpg)";
        $('.top').css("background-image", imageURL).css("background-size", "cover");
        $('.top .am-g').css("background-color", "hsla(0, 0%, 0%, 0.2)");
    } else {
        $("#mmm").children().removeClass('am-icon-toggle-on').addClass('am-icon-toggle-off');
        $('.top').css("background-image", "url(./images/hero_bg.png)").css("background-size", "initial");
        $('.top .am-g').css("background-color", "transparent");
    }
})

function mmm() {
    if (document.location.search == "?mmm") {
        document.location = "./";
    } else {
        document.location = "./?mmm";
    }
}

//multilang
var langCode = navigator.language;
var langs = ["zh-TW", "zh-CN", "en-US", "ja"];

function lang(langCode) {
    $.getJSON('langs/' + langCode + '.json', function(jsonData) {
        $.each($("[tkey]"), function(jkey) {
            var tkey = $("[tkey]").eq(jkey).attr('tkey');
            var tval = jsonData[tkey];
            $("[tkey]").eq(jkey).html(tval);
        })
    });
}

// Int page lang
if ($.inArray(langCode, langs) >= 0 && langCode != "zh-TW") {
    lang(langCode);

    for (var i = 0; i < 4; i++) {
        var code = $('footer select').find('option').eq(i).val();;
        if (code == langCode) {
            $('footer select').find('option').eq(i).attr('selected', true);
        } else {
            $('footer select').find('option').eq(i).attr('selected', false);
        }
    }
}

//change language
$("footer select").change(function() {
    var langCode = $("footer select").val();
    lang(langCode);
});