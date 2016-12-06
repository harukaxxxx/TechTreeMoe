//change img whem option
$('.mixitup select').on('change', function() {
    var ship = this.name
    var ship_img = this.value;
    $('#' + ship + ' img').fadeOut(400, function() {
        $('#' + ship + ' img').attr("src", "images/ship_previews/" + ship_img + ".png");
    })
    $('#' + ship + ' img').fadeIn(400);
});

//get selected
var img_list = [];

function submit() {
    //progress bar start
    $.AMUI.progress.start();

    //generate file name list
    var selectedList = $('select');
    var c = selectedList.length;
    for (var i = 0; i < c; i++) {
        var value = selectedList[i].value;
        img_list.push(value);

    }
    console.log("start download " + img_list.length + " items!");

    //request download
    $.post("", {
                img_list
            },
            function(data) {
                Cookies.set('list', img_list, { expires: 1095 });
                $("body").append("<iframe src='./assets/php/zip.php?url=" + img_list + "' style='display: none;'></iframe>");
            })
        .done(function() {
            $.AMUI.progress.done();
        })

}

// mixItUp
$(function() {
    $('#Container').mixItUp({
        callbacks: {
            onMixBusy: function(state) {
                $('.loader_bg').fadeIn(500);
            },
            onMixEnd: function(state) {
                //default data
                var intList = [];
                var selectedList = $('select');
                var c = selectedList.length;
                for (var i = 0; i < c; i++) {
                    var value = selectedList[i].value;
                    intList.push(value);
                }
                Cookies.set('intList', intList);
                //restore data
                if (Cookies.get('list') != undefined) {
                    var cookie = Cookies.getJSON('list');
                    console.log("save data exist");
                    cookie.forEach(function(option) {
                        var id = option.substring(0, 7);
                        $("#" + id + " select").find(":selected").attr('selected', false);
                        var options = $("#" + id + " select").find('option');
                        var oc = options.length
                        for (var k = 0; k < oc; k++) {
                            if (options.eq(k).val() == option) {
                                options.eq(k).attr('selected', true);
                            }
                        }
                    }, this);
                };
                $.AMUI.progress.done();
                $('.loader_bg').fadeOut(500);
            },
            onMixStart: function(state, futureState) {
                $.AMUI.progress.start();
            }
        },
        load: {
            filter: 'all'
        },
        animation: {
            duration: 400,
            effects: 'fade translateZ(-360px) stagger(34ms)',
            easing: 'ease'
        }
    });
})

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
        location.reload();
    }
}