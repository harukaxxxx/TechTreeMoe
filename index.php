<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>WOWS - TechTreeMoe</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42562282-2', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <div class="loader_bg"></div>
    <header class="am-topbar am-topbar-fixed-top">
        <div class="am-container">
            <h1 class="am-topbar-brand">
                TechTreeMoe
            </h1>
            <div class="am-collapse am-topbar-collapse" id="collapse-head">
                <div class="am-topbar-right">
                    <button id="mmm" class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="mmm();"><span class="am-icon-toggle-off"></span> 萌萌模式</button>
                    <button id="submit" class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="submit();" data-am-loading="{spinner: 'circle-o-notch', loadingText: '提交中...'}"><span class="am-icon-download"></span> 下載</button>
                </div>
            </div>
        </div>
    </header>
    <div class="top">
        <div class="am-g">
            <div class="am-u-lg-12">
                <h1 class="top-title" tkey="tkey_site_title">TechTreeMoe - 戰艦世界科技樹萌化</h1>
                <p tkey="tkey_site_description">
                    結合艦隊收藏、戰艦少女、鋼鐵少女、碧藍航線、最終戰艦、Victory Belles以及同人作品，讓科技樹萌起來吧！
                </p>
                <button type="button" class="am-btn am-btn-primary" data-am-modal="{target: '#preview'}">效果預覽</button>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-alert" tabindex="-1" id="preview">
        <div class="am-modal-dialog">
            <div class="am-modal-hd" tkey="tkey_preview_button">效果預覽</div>
            <div class="am-modal-bd">
                <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/japan.jpg" class="">
                                <img src="images/preview/japan.jpg" alt="日本" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_japan">日本預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/usa.jpg" class="">
                                <img src="images/preview/usa.jpg" alt="美國" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_usa">美國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/germany.jpg" class="">
                                <img src="images/preview/germany.jpg" alt="德國" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_germany">德國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/ussr.jpg" class="">
                                <img src="images/preview/ussr.jpg" alt="蘇聯" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_ussr">蘇聯預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/uk.jpg" class="">
                                <img src="images/preview/uk.jpg" alt="英國" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_uk">英國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/france.jpg" class="">
                                <img src="images/preview/france.jpg" alt="法國" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_france">法國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/italia.jpg" class="">
                                <img src="images/preview/italia.jpg" alt="義大利" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_italia">義大利預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/commonwealth.jpg" class="">
                                <img src="images/preview/commonwealth.jpg" alt="聯邦" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_commonwealth">聯邦預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/pan_asia.jpg" class="">
                                <img src="images/preview/pan_asia.jpg" alt="泛亞" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_pan_asia">泛亞預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/poland.jpg" class="">
                                <img src="images/preview/poland.jpg" alt="波蘭" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_poland">波蘭預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/arp.jpg" class="">
                                <img src="images/preview/arp.jpg" alt="蒼藍鋼鐵戰艦" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_arp">蒼藍鋼鐵戰艦預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/haifuri.jpg" class="">
                                <img src="images/preview/haifuri.jpg" alt="高校艦隊" />
                                <h3 class="am-gallery-title" tkey="tkey_preview_haifuri">高校艦隊預覽</h3>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="am-modal-footer">
                <span class="am-modal-btn" tkey="tkey_close">關閉</span>
            </div>
        </div>
    </div>
    <div class="intro">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="intro-h2" tkey="tkey_intro_section">TechTreeMoe介紹與教學</h2>
                <div class="am-g">
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
                        <h3 class="intro-h3" tkey="tkey_intro_title"><i class="am-icon-info-circle"></i> 介紹</h3>
                        <ul class="intro-p">
                            <li tkey="tkey_intro_1">艦娘圖標百百種，挑選中意的圖標來萌化科技樹。</li>
                            <li tkey="tkey_intro_2">利用<span class="am-icon-paint-brush am-text-primary"> 可更替</span> 按鈕可快速尋找可以替換的項目</li>
                            <li tkey="tkey_intro_3">按下<span class="am-icon-download am-text-primary"> 下載</span>時將使用LocalStorage儲存您的紀錄。</li>
                            <li tkey="tkey_intro_4">此模組不包含背景國旗及艦型小圖標。</li>
                        </ul>
                    </div>
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
                        <h3 class="intro-h3" tkey="tkey_tutorial_title"><i class="am-icon-book"></i> 教學</h3>
                        <ol class="intro-p">
                            <li tkey="tkey_tutorial_1">艦船圖片下的下拉選單可選取並預覽想使用的圖標。</li>
                            <li tkey="tkey_tutorial_2">挑選完畢後再點擊右上的<span class="am-icon-download am-text-primary"> 下載</span> 按鈕進行下載。</li>
                            <li tkey="tkey_tutorial_3">耐心等待下載完成。</li>
                            <li tkey="tkey_tutorial_4">解壓縮後將gui資料夾複製到<code>res_mods/x.x.x/</code>裡即可。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mixitup">
        <div class="filter-group">
            <div class="am-btn-group">
                <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="filterReset();" tkey="tkey_filter_all">全部顯示</button>
            </div>
            <div class="am-btn-group" data-am-button>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".japan" tkey="tkey_filter_japan"> 日本
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".usa" tkey="tkey_filter_usa"> 美國
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".ussr" tkey="tkey_filter_ussr"> 蘇聯
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".germany" tkey="tkey_filter_germany"> 德國
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".uk" tkey="tkey_filter_uk"> 英國
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".pan_asia" tkey="tkey_filter_pan_asia"> 泛亞
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".france" tkey="tkey_filter_france"> 法國
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".italia" tkey="tkey_filter_italia"> 義大利
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="nation" value=".commonwealth" tkey="tkey_filter_commonwealth"> 聯邦
                </label>
            </div>
            <div class="am-btn-group" data-am-button>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="type" value=".destroyer" tkey="tkey_filter_destroyer"><span class="am-icon-paint-anchor"></span>驅逐艦
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="type" value=".cruiser" tkey="tkey_filter_cruiser"><span class="am-icon-paint-anchor"></span>巡洋艦
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="type" value=".battleship" tkey="tkey_filter_battleship"><span class="am-icon-paint-anchor"></span>戰艦
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="type" value=".aircarrier" tkey="tkey_filter_aircarrier"><span class="am-icon-paint-anchor"></span>航空母艦
                </label>
            </div>
            <div class="am-btn-group" data-am-button>
                <label class="am-btn am-btn-primary am-btn-sm am-round">
                    <input type="radio" class="options" name="extra" value=".change" tkey="tkey_filter_change"><span class="am-icon-paint-brush"></span>可更替
                </label>
                <label class="am-btn am-btn-primary am-btn-sm am-round am-icon-premium">
                    <input type="radio" class="options" name="extra" value=".premium" tkey="tkey_filter_premium"><img src="./images/icons/premium_icon.png">加值艦
                </label>
            </div>
            <div class="am-btn-group">
                <button type="button" class="am-btn am-btn-primary am-btn-sm am-round" onclick="reset();" tkey="tkey_filter_reset"><span class="am-icon-refresh"></span>回復預設</button>
            </div>
        </div>

        <div id="Container">
            <?php
                // generate ship list
                $shipList = array();
                if ($handle = opendir('./database')) {
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            $fileName = rtrim($entry, '.json');
                            array_push($shipList, $fileName);
                        }
                    }
                    closedir($handle);
                }
                //generate options function
                function options($file,$type){
                    $id = $file->{'id'};
                    $name = $file->{'name'};;
                    if ($file->{"$type"}) {
                        echo "<optgroup label='$type'>\n";
                        foreach ($file->{"$type"} as $key => $value) {
                            $value = ($type != '同人作品') ? $value : "【$value[0]】$value[2]" ;
                            $default = ($file->{'default'} == $key) ? " selected" : "" ;
                            echo "<option value='$id-$key'$default>$value</option>\n";
                        };
                        echo "</optgroup>\n";
                    }
                }
                //echo result
                foreach ($shipList as $value) {
                    $shipFile = json_decode(file_get_contents("./database/$value.json"));
                    $shipId = $shipFile->{'id'};
                    $shipName = $shipFile->{'name'};
                    $shipTier = $shipFile->{'tier'};
                    $shipNation = $shipFile->{'nation'};
                    $shipType = $shipFile->{'type'};
                    $shipDefault = $shipFile->{'default'};
                    $shipChange = ($shipFile->{'change'}) ? " change" : "";
                    $shipPremium = ($shipFile->{'premium'}) ? " premium" : "";
                    $shipARP = ($shipFile->{'arp'}) ? " arp" : "";
                    $order = $shipId;
                    $shipMoe = (property_exists($shipFile, "萌萌模式")) ? " moe" : "" ;
                    if ($_SERVER['QUERY_STRING'] != "mmm"
                       and property_exists($shipFile, "moe")) {
                      continue;
                    }
                    echo "<div id='$shipId' class='mix $shipType $shipNation$shipPremium$shipChange$shipARP$shipMoe' data-order='$order'>\n
                            <p class='ship icon-$shipType'><span class='tier'>$shipTier</span>$shipName</p>\n
                                <div class='img_container'>\n
                                    <div class='addon'><img src='images/ship_previews_web/$shipId-$shipDefault.png'></div>\n
                                </div>\n
                            <select name='$shipId' data-am-selected>\n";
                    echo "<optgroup label='戰艦世界'>\n<option value='$shipId-0'>【戰艦世界】$shipName</option>\n</optgroup>\n";
                    options($shipFile,'艦隊收藏');
                    options($shipFile,'戰艦少女');
                    options($shipFile,'鋼鐵少女');
                    options($shipFile,'碧藍航線');
                    options($shipFile,'高校艦隊');
                    options($shipFile,'最終戰艦');
                    options($shipFile,'同人作品');
                    options($shipFile,'November');
                    options($shipFile,'蒼藍鋼鐵戰艦');
                    options($shipFile,'Victory Belles');
                    if ($_SERVER['QUERY_STRING'] == "mmm") {
                        options($shipFile, '萌萌模式');
                    };
                    echo"</select>\n</div>\n";
                }
            ?>
        </div>
    </div>
    <div class="about">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="about-title about-color" tkey="tkey_about_section">TechTreeMoe更新紀錄與詳細資訊</h2>
                <div class="am-g about-box">
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
                        <h4 class="about-color" tkey="tkey_contact_title"><i class="am-icon-paper-plane"></i> 聯絡我們</h4>
                        <p tkey="tkey_contact_content">若您發現任何問題請至<a href="https://github.com/harukaxxxx/WOWS-TechTreeMoe/issues">Github</a>建立Issues回報！<br>（網站Bug、艦船缺漏、素材提供、功能建議等）
                        </p>
                        <h4 class="about-color" tkey="tkey_detail-title"><i class="am-icon-question-circle"></i> 詳細資訊</h4>
                        <div class="am-scrollable-vertical detail">
                            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                <?php
                                function detial($type,$shipList){
                                    echo "<dl class='am-accordion-item'>
                                                <dt class='am-accordion-title'>".$type."作品對照</dt>
                                                    <dd class='am-accordion-bd am-collapse '>
                                                        <div class='am-accordion-content'>
                                                            <ul class='am-list am-list-static'>";
                                    foreach ($shipList as $ship) {
                                        $shipFile = json_decode(file_get_contents("./database/$ship.json"));
                                        $shipname = $shipFile->{'name'};
                                        $cNames = [];
                                        if($shipFile->{"$type"}){
                                            echo "<li>".$shipname." <span class='am-icon-arrow-right'></span> ";
                                            foreach($shipFile->{"$type"} as $value){
                                                if ($type == "同人作品") {
                                                    $author = ($value[1]) ? "<a href=".$value[1].">$value[0]</a>" : $value[0] ;
                                                    $draw = ($value[3]) ? "<a href=".$value[3].">$value[2]</a>" : $value[2] ;
                                                    $customName = "【".$author."】".$draw;
                                                    array_push($cNames,$customName);
                                                }else if ($type == "萌萌模式") {
                                                    array_push($cNames,$value);
                                                } else{
                                                    $p = strpos($value,"】");
                                                    $customName = substr($value,$p+3);
                                                    array_push($cNames,$customName);
                                                }
                                            };
                                            echo implode(" / ",$cNames)."</li>";
                                        };
                                    };                                    
                                    echo "</ul>\n</div>\n</dd>\n</dl>";
                                };
                                detial('艦隊收藏',$shipList);
                                detial('戰艦少女',$shipList);
                                detial('鋼鐵少女',$shipList);
                                detial('碧藍航線',$shipList);
                                detial('November',$shipList);
                                detial('蒼藍鋼鐵戰艦',$shipList);
                                detial('Victory Belles',$shipList);
                                detial('高校艦隊',$shipList);
                                detial('最終戰艦',$shipList);
                                detial('同人作品',$shipList);
                                if ( $_SERVER['QUERY_STRING'] == "mmm") {
                                    detial('萌萌模式',$shipList);
                                };
                                ?>
                            </section>
                        </div>
                        <hr class="am-article-divider am-show-sm-only">
                    </div>
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
                        <h4 class="about-color" tkey="tkey_log_title"><i class="am-icon-list-ul"></i> 更新紀錄</h4>
                        <div class="am-scrollable-vertical update">
                            <ul class="am-list am-list-static am-list-border">
                                <?php
                                $logFile = json_decode(file_get_contents("./update.json"));
                                foreach ($logFile as $value) {
                                    if ($value->{'moe'} and $_SERVER['QUERY_STRING'] != "mmm") {
                                        continue;
                                    }
                                    if (property_exists($value, "moe")) {
                                        $moe = "<span class='am-icon-heart am-text-danger'></span>";
                                    }else{
                                        $moe = "";
                                    }
                                    $time = $value->{'time'};
                                    $level = $value->{'level'};
                                    if($level == "IMPORTANT"){
                                        $class = "danger";
                                    }elseif($level == "NEW"){
                                        $class = "primary";
                                    }elseif($level == "UPDATE"){
                                        $class = "success";
                                    }else{
                                        $class = "warning";
                                    }
                                    if ($_SERVER['QUERY_STRING'] != "mmm" and property_exists($value, "moe")) {
                                      continue;
                                    }
                                    echo "<li>\n<span class='am-badge am-radius am-badge-$class'>$level</span><small class='am-text-$class'>$time $moe</small>\n<ul>";
                                    foreach($value->{"event"} as $value){
                                        echo "<li>$value</li>";
                                    }
                                    echo "</ul>\n</li>";
                                };
                                ?>
                            </ul>
                        </div>
                    </div>
                    <button type="button" class="am-btn thanks-btn am-btn-block" data-am-modal="{target: '#thanks'}">特別感謝</button>
                    <div class="am-popup" id="thanks">
                        <div class="am-popup-inner">
                            <div class="am-popup-hd">
                            <h4 class="am-popup-title">特別感謝名單</h4>
                            <span data-am-modal-close class="am-close">&times;</span>
                            </div>
                            <ul class="am-list am-list-static">
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="http://blog.sina.com.cn/u/3027377595">bluekiller</a>】 - 碧藍航線立繪提供</li>
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="https://home.gamer.com.tw/homeindex.php?owner=kakushi03004">紙龜萌萌雪</a>】 - 碧藍航線立繪提供</li>
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="https://home.gamer.com.tw/homeindex.php?owner=kkkkking12">阿爽</a>】 - 鋼鐵少女立繪提供</li>
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="https://home.gamer.com.tw/homeindex.php?owner=ae033179">Adam Richter</a>】 - 鋼鐵少女立繪提供</li>
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="https://home.gamer.com.tw/homeindex.php?owner=roderichlind">Blomkavist</a>】 - 新船資訊提供</li>
                                <li><i class="am-icon-user am-icon-fw"></i>【<a href="http://srarithmetic.com/">Nacht</a>】 - 更新紀錄與詳細資訊背景圖提供<a href="https://www.pixiv.net/member_illust.php?mode=medium&illust_id=51816460"><i class="am-icon-external-link"></i></a></li>
                                <li><i class="am-icon-globe am-icon-fw"></i>【<a href="https://victorybelles.tumblr.com/">Victory Belles</a>】 - Victory Belles立繪提供</li>
                                <li><i class="am-icon-globe am-icon-fw"></i>【<a href="http://fleet.diablohu.com/">是誰呼叫艦隊</a>】 - 艦隊收藏立繪提供</li>
                                <li><i class="am-icon-globe am-icon-fw"></i>【<a href="https://www.zjsnrwiki.com/wiki">艦R百科</a>】 - 戰艦少女立繪提供</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-am-widget="gotop" class="am-gotop am-gotop-fixed">
        <a href="#top" title="回到顶部">
            <span class="am-gotop-title">回到顶部</span>
            <i class="am-gotop-icon am-icon-chevron-up"></i>
        </a>
    </div>
    <?php 
 
            $path = './assets/php/cache';
                //file size formatter
                function human_filesize($bytes, $decimals = 2) {
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}
//sizeCount
$totalsize = 0;
if ($handle = opendir($path)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
          $filebytes = filesize("$path/$entry");
          $totalsize = $totalsize + $filebytes;
        }
    }
    closedir($handle);
}
//files count
$files = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);
?>
    <footer class="footer">
        <p>Designed by © 2010 <a href="http://makinoworks.com" target="_blank">MakinoWorks</a>｜Powered by <a href="https://mixitup.kunkalabs.com/">MixItUp</a>&<a href="http://amazeui.org/"> AMAZE UI</a>｜
            <?php echo iterator_count($files) ?> caches cost
            <?php echo human_filesize($totalsize) ?>｜
            <select id="lang" data-am-selected="{dropUp: 1,btnWidth: '100px', btnSize: 'sm',btnStyle: 'link'}">
                <option value="zh-TW">繁體中文</option>
                <option value="zh-CN">简体中文</option>
                <option value="en-US">English</option>
                <option value="ja">日本語</option>
            </select>
        </p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>