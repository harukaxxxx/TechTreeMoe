var query = location.search;
switch (query) {
    case '?ships':
        var options = {
            valueNames: ['name', 'tier', 'id', 'type', 'nation']
        };
        new List('ships', options);
        break;
    default:
        var mixer = mixitup('.container');

        function submit(id) {
            var id = $(id)[0].id;
            var select = "#" + id;
            var sid = $(select + " [name='id']")[0].value;
            var name = $(select + " [name='name']")[0].value;

            var tiers = ['I', 'Ⅱ', 'Ⅲ', 'Ⅳ', 'Ⅴ', 'Ⅵ', 'Ⅶ', 'Ⅷ', 'Ⅸ', 'Ⅹ'];
            for (var t = 0; t < 10; t++) {
                if ($(select + " [name='tier']")[t].checked) {
                    var tier = tiers[t];
                }
            }
            var nation = $(select + " [name='nation']")[0].value;
            var type = $(select + " [name='type']")[0].value;

            for (var d = 0; d < $(select + " [name='default']").length; d++) {
                if ($(select + " [name='default']")[d].checked) {
                    var def = $(select + " [name='default']")[d].value;
                }
            }
            var change = $(select + " [name='change']")[0].checked;
            var premium = $(select + " [name='premium']")[0].checked;
            var arp = $(select + " [name='arp']")[0].checked;
            var json = {
                "id": sid,
                "name": name,
                "tier": tier,
                "nation": nation,
                "type": type,
                "default": def,
                "change": change,
                "premium": premium,
                "arp": arp
            };
            var band = ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', 'November', '蒼藍鋼鐵戰艦', 'Victory Belles', '高校艦隊', '最終戰艦', '萌萌模式', '同人作品'];
            band.forEach(function (band) {
                var optionBand = $(select + " [name='" + band + "'] [name='band']").text();
                if (optionBand) {
                    var c = $(select + " [name='" + band + "'] .am-input-group").length;
                    var optionList = [];
                    var rv = {};
                    for (var s = 0; s < c; s++) {
                        var optionID = $(select + " [name='" + band + "'] [name='default']")[s].value;
                        if (optionBand == '同人作品') {
                            for (var a = 0; a < $(select + " [name='" + band + "'] .am-input-group-label").length; a++) {
                                var optionAutor = $(select + " [name='" + band + "'] .am-form-field")[0].value;
                                var urlAutor = $(select + " [name='" + band + "'] .am-form-field")[1].value;
                                var optionWorks = $(select + " [name='" + band + "'] .am-form-field")[2].value;
                                var urlWorks = $(select + " [name='" + band + "'] .am-form-field")[3].value;
                                var optionName = [optionAutor, urlAutor, optionWorks, urlWorks];
                                console.log(optionName);
                            }
                        } else {
                            var optionName = $(select + " [name='" + band + "'] .am-form-field")[s].value;
                        }
                        optionList[s] = '"' + optionID + '":"' + optionName + '"';
                        rv[optionID] = optionName;
                    }
                    var result = optionList.toString();
                    var result = "{" + result + "}";
                    if (!$.isEmptyObject(rv)) {
                        json[optionBand] = rv;
                    }
                }
            }, this);

            $.getJSON("../database/" + sid + ".json", function (json) {

                var original = JSON.stringify(json, null, 2);
                $('#json_original_' + sid).text(original);
            });
            var edited = JSON.stringify(json, null, 2);
            $('#json_edited_' + sid).text(edited);
            $('#compare_' + sid).modal('open');

            //scroll synchronize
            $('#json_original_' + sid).on('scroll', function () {
                $('#json_edited_' + sid).scrollTop($(this).scrollTop());
            });
            $('#json_edited_' + sid).on('scroll', function () {
                $('#json_original_' + sid).scrollTop($(this).scrollTop());
            });
        }

        function add(id, band) {
            var id = $(id)[0].id;
            var next = $('#' + id + ' .am-form [name="default"]').length + 1;
            var nextDef = ('0' + next).slice(-2);
            if (band == '同人作品') {
                var inputGroup = '<div class="am-input-group"><span class="am-input-group-label"><input type="radio" value="' + next + '" name="default"> ' + nextDef + '</span><input type="text" class="am-form-field"><input type="text" class="am-form-field"><input type="text" class="am-form-field"><input type="text" class="am-form-field"><span class="am-input-group-label"><button class="am-btn am-btn-default" type="button" onclick="del(this);">移除</button></span></div>';
            } else {
                var inputGroup = '<div class="am-input-group"><span class="am-input-group-label"><input type="radio" value="' + next + '" name="default"> ' + nextDef + '</span><input type="text" class="am-form-field" value="【' + band + '】"><span class="am-input-group-btn"><button class="am-btn am-btn-default" type="button" onclick="del(this);">移除</button></span></div>';
            }
            var formGroup = $('#' + id + ' [band="' + band + '"]').parent();
            formGroup.append(inputGroup);
        }

        function del(target) {
            $(target).parent().parent().remove();
        }

        function confirm(id) {
            var id = $(id)[0].id;
            var jsonData = $('#json_edited_' + id).text();
            var jsonData = JSON.parse(jsonData);
            $.post("php/writedata.php", jsonData);
        }

        break;
}