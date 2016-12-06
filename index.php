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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

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
                    <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="submit();"><span class="am-icon-download"></span> 下載</button>
                </div>
            </div>
        </div>
    </header>
    <div class="top">
        <div class="am-g">
            <div class="am-u-lg-12">
                <h1 class="top-title">TechTreeMoe - 戰艦世界科技樹萌化</h1>
                <p>
                    結合艦隊收藏、戰艦少女、鋼鐵少女、碧藍航線、Victory Belles以及同人作品，讓科技樹萌起來吧！
                </p>
                <button type="button" class="am-btn am-btn-primary" data-am-modal="{target: '#preview'}">效果預覽</button>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-alert" tabindex="-1" id="preview">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">效果預覽</div>
            <div class="am-modal-bd">
                <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }">
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/japan.jpg" class="">
                                <img src="images/preview/japan.jpg" alt="日本" />
                                <h3 class="am-gallery-title">日本預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/usa.jpg" class="">
                                <img src="images/preview/usa.jpg" alt="美國" />
                                <h3 class="am-gallery-title">美國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/germany.jpg" class="">
                                <img src="images/preview/germany.jpg" alt="德國" />
                                <h3 class="am-gallery-title">德國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/ussr.jpg" class="">
                                <img src="images/preview/ussr.jpg" alt="蘇聯" />
                                <h3 class="am-gallery-title">蘇聯預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/uk.jpg" class="">
                                <img src="images/preview/uk.jpg" alt="英國" />
                                <h3 class="am-gallery-title">英國預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/pan_asia.jpg" class="">
                                <img src="images/preview/pan_asia.jpg" alt="泛亞" />
                                <h3 class="am-gallery-title">泛亞預覽</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="am-gallery-item">
                            <a href="images/preview/arp.jpg" class="">
                                <img src="images/preview/arp.jpg" alt="蒼藍鋼鐵戰艦" />
                                <h3 class="am-gallery-title">蒼藍鋼鐵戰艦預覽</h3>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="am-modal-footer">
                <span class="am-modal-btn">關閉</span>
            </div>
        </div>
    </div>
    <div class="intro">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="intro-h2">TechTreeMoe介紹與教學</h2>
                <div class="am-g">
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
                        <h3 class="intro-h3"><i class="am-icon-info-circle"></i> 介紹</h3>
                        <ul class="intro-p">
                            <li>艦娘圖標百百種，挑選中意的圖標來萌化科技樹。</li> 
                            <li>利用<span class="am-icon-paint-brush am-text-primary"> 可更替</span> 按鈕可快速尋找可以替換的項目</li> 
                            <li>按下<span class="am-icon-download am-text-primary"> 下載</span>時將使用cookie儲存您的紀錄。</li>
                            <li>此模組不包含背景國旗及艦型小圖標。</li>
                        </ul>
                    </div>
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12 intro-mb">
                        <h3 class="intro-h3"><i class="am-icon-book"></i> 教學</h3>
                        <ol class="intro-p">
                            <li>艦船圖片下的下拉選單可選取並預覽想使用的圖標。</li>
                            <li>挑選完畢後再點擊右上的<span class="am-icon-download am-text-primary"> 下載</span> 按鈕進行下載。</li> 
                            <li>點擊右上的 <span class="am-icon-download am-text-primary"> 下載</span> 按鈕下載模組。</li> 
                            <li>解壓縮後將gui資料夾複製到<code>res_mods/x.x.x/</code>裡即可。</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mixitup">
      <!--篩選器-->
        <div class="filter_group">
            <button type="button" class="filter am-btn am-btn-secondary" data-filter="all">全部顯示</button>
            <div class="am-btn-group">
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".japan">日本</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".usa">美國</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".ussr">蘇聯</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".germany">德國</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".uk">英國</button>
                <!--<button type="button" class="filter am-btn am-btn-secondary" data-filter=".poland">波蘭</button>-->
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".pan_asia">泛亞</button>
            </div>
            <div class="am-btn-group">
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".destroyer"><span class="am-icon-paint-anchor">驅逐艦</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".cruiser"><span class="am-icon-paint-anchor">巡洋艦</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".battleship"><span class="am-icon-paint-anchor">戰艦</button>
                <button type="button" class="filter am-btn am-btn-secondary" data-filter=".aircarrier"><span class="am-icon-paint-anchor">航空母艦</button>
            </div>
            <div class="am-btn-group">
                <button class="filter am-btn am-btn-secondary" data-filter=".change"><span class="am-icon-paint-brush"></span>可更替</button>
                <button class="filter am-btn am-btn-secondary am-icon-premium" data-filter=".premium"><img src="./images/icons/premium_icon.png">加值艦</button>
            </div>
            <button type="button" class="am-btn am-btn-secondary" onclick="reset();"><span class="am-icon-refresh"></span>回復預設</button>
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
                    if ($file->{"$type"}) {
                        $id = $file->{'id'};
                        echo "<optgroup label='$type'>\n";
                        foreach ($file->{"$type"} as $key => $value) {
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

                    echo "<div id='$shipId' class='mix $shipType $shipNation$shipPremium$shipChange$shipARP'>\n
                            <p class='ship icon-$shipType'><span class='tier'>$shipTier</span>$shipName</p>\n
                                <div class='img_container'>\n
                                    <div class='addon'><img src='images/ship_previews_web/$shipId-$shipDefault.png'></div>\n
                                </div>\n
                            <select name='$shipId' data-am-selected>\n";
                    options($shipFile,'艦隊收藏');
                    options($shipFile,'戰艦少女');
                    options($shipFile,'鋼鐵少女');
                    options($shipFile,'碧藍航線');
                    options($shipFile,'同人作品');
                    options($shipFile,'November');
                    options($shipFile,'蒼藍鋼鐵戰艦');
                    options($shipFile,'Victory Belles');
                    echo"</select>\n</div>\n";
                }
            ?>
        </div>
    </div>
    <div class="about">
        <div class="am-g am-container">
            <div class="am-u-lg-12">
                <h2 class="about-title about-color">TechTreeMoe更新紀錄與詳細資訊</h2>
                <div class="am-g">
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
                        <h4 class="about-color"><i class="am-icon-paper-plane"></i> 聯絡我們</h4>
                        <p>若您有任何建議歡迎來信 <span class="am-icon-envelope"> harukaxxxx@makinoworks.com</span><br> 若您有想要提供的素材，也歡迎與我們聯絡！
                        </p>
                        <h4 class="about-color"><i class="am-icon-question-circle"></i> 詳細資訊</h4>
                        <div class="am-scrollable-vertical detail">
                            <section data-am-widget="accordion" class="am-accordion am-accordion-default" data-am-accordion='{ "multiple": true }'>
                                <dl class="am-accordion-item am-active">
                                    <dt class="am-accordion-title">艦隊收藏作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse am-in">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>築摩 >>> 築摩/築摩改二</li>
                                                <li>天龍 >>> 天龍/泳裝天龍</li>
                                                <li>球磨 >>> 球磨/浴衣球磨</li>
                                                <li>古鷹 >>> 古鷹/古鷹改二</li>
                                                <li>青葉 >>> 青葉</li>
                                                <li>妙高 >>> 妙高/妙高改二</li>
                                                <li>最上 >>> 最上/雨季最上</li>
                                                <li>香取 >>> 香取/和服香取/鹿島/聖誕鹿島/情人節鹿島</li>
                                                <li>夕張 >>> 夕張/雨季夕張</li>
                                                <li>北上 >>> 北上/北上改二</li>
                                                <li>愛宕 >>> 愛宕</li>
                                                <li>利根 >>> 利根/利根改二</li>
                                                <li>海風 >>> 海風</li>
                                                <li>磯風 >>> 磯風/秋刀魚磯風</li>
                                                <li>睦月 >>> 睦月/睦月改二</li>
                                                <li>初春 >>> 初春/初春改二</li>
                                                <li>吹雪 >>> 吹雪/吹雪改二/秋祭り法被吹雪/秋祭り法被吹雪改二</li>
                                                <li>陽炎 >>> 陽炎/野分/嵐/萩風/舞風</li>
                                                <li>島風 >>> 島風</li>
                                                <li>神風 >>> 神風</li>
                                                <li>神風R >>> 神風</li>
                                                <li>金剛 >>> 金剛/金剛改二/買い出し金剛</li>
                                                <li>扶桑 >>> 扶桑/和服扶桑/泳裝扶桑/秋刀魚扶桑</li>
                                                <li>長門 >>> 長門</li>
                                                <li>天城 >>> 天城/天城改/買い出し天城</li>
                                                <li>大和 >>> 大和/泳裝大和</li>
                                                <li>鳳翔 >>> 鳳翔</li>
                                                <li>瑞鳳 >>> 瑞鳳/瑞鳳改/和服瑞鳳</li>
                                                <li>龍驤 >>> 龍驤/龍驤改/龍驤改二/聖誕龍驤/聖誕龍驤改二/牛丼龍驤</li>
                                                <li>飛龍 >>> 飛龍/飛龍改二</li>
                                                <li>翔鶴 >>> 翔鶴/翔鶴改二</li>
                                                <li>大鳳 >>> 大鳳/大鳳改</li>
                                                <li>Bismarck >>> Bismarck/Bismarck改/Bismarck zwei/Bismarck drei</li>
                                                <li>Iowa >>> Iowa</li>
                                                <li>Prinz Eugen >>> Prinz Eugen/Prinz Eugen改</li>
                                                <li>Warspite >>> Warspite</li>
                                                <li>暁 >>> 暁/暁改二</li>
                                                <li>秋月 >>> 秋月/浴衣秋月</li>
                                                <li>白露 >>> 白露/白露改/Android白露/夏季白露/浴衣白露</li>
                                                <li>夕雲 >>> 夕雲/年始夕雲/春之花束夕雲</li>
                                                <li>Lexington >>> Saratoga</li>
                                                <li>Leberecht Maass >>> Z1</li>
                                                <li>Ernst Gaede >>> Z3</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">戰艦少女作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>天龍 >>> 天龍/天龍改/女僕</li>
                                                <li>古鷹 >>> 古鷹</li>
                                                <li>青葉 >>> 青葉/紅白偶像/日系學校泳裝</li>
                                                <li>最上 >>> 校服最上</li>
                                                <li>夕張 >>> 夕張/夕張改</li>
                                                <li>北上 >>> 北上</li>
                                                <li>愛宕 >>> 愛宕</li>
                                                <li>睦月 >>> 睦月</li>
                                                <li>吹雪 >>> 吹雪/吹雪改</li>
                                                <li>陽炎 >>> 陽炎/嵐</li>
                                                <li>島風 >>> 島風</li>
                                                <li>金剛 >>> 金剛</li>
                                                <li>扶桑 >>> 扶桑</li>
                                                <li>長門 >>> 長門</li>
                                                <li>瑞鳳 >>> 瑞鳳</li>
                                                <li>飛龍 >>> 飛龍</li>
                                                <li>翔鶴 >>> 翔鶴</li>
                                                <li>大鳳 >>> 大鳳</li>
                                                <li>Kirov >>> Kirov</li>
                                                <li>Tashkent >>> Tashkent</li>
                                                <li>Aurora >>> Aurora</li>
                                                <li>Karlsruhe >>> Karlsruhe/Karlsruhe改</li>
                                                <li>Königsberg >>> Königsberg/Königsberg改</li>
                                                <li>Hipper >>> Hipper</li>
                                                <li>Emden >>> Emden/溫馨情人</li>
                                                <li>Tirpitz >>> Tirpitz/Tirpitz/兒童節</li>
                                                <li>Warspite >>> Warspite/Queen Elizabeth</li>
                                                <li>Mahan >>> Mahan</li>
                                                <li>Fletcher >>> Fletcher</li>
                                                <li>Gearing >>> Gearing/Gearing改/海上漂流套装</li>
                                                <li>Omaha >>> Omaha/Omaha改</li>
                                                <li>Pensacola >>> Pensacola/Salt Lake City</li>
                                                <li>New Orleans >>> New Orleans/New Orleans改/Quincy/Quincy改/Quincy Sapphire</li>
                                                <li>Atlanta >>> Atlanta/Atlanta改</li>
                                                <li>Indianapolis >>> Indianapolis/Portland</li>
                                                <li>Colorado >>> Colorado/Colorado改</li>
                                                <li>Langley >>> Langley</li>
                                                <li>Bogue >>> Bogue</li>
                                                <li>Independence >>> Independence/白色惡魔</li>
                                                <li>Ranger >>> Ranger/Ranger改/HeartCatchRabbit</li>
                                                <li>Lexington >>> Lexington/Lexington改/LoveBlue/Strap bikini</li>
                                                <li>Essex >>> Essex</li>
                                                <li>Scharnhorst >>> Scharnhorst/我到河北省來</li>
                                                <li>NorthCarolina >>> NorthCarolina/Washington</li>
                                                <li>Gneisenau >>> Gneisenau</li>
                                                <li>St.Louis >>> St.Louis</li>
                                                <li>Cleveland >>> Houston/Houston改</li>
                                                <li>Edinburgh >>> Edinburgh</li>
                                                <li>秋月 >>> 秋月</li>
                                                <li>曉 >>> 曉/曉改</li>
                                                <li>Graf Spee >>> Graf Spee</li>
                                                <li>Z23 >>> Z24/Z28</li>
                                                <li>Nürnberg >>> Leipzig</li>
                                                <li>Missouri >>> Missouri</li>
                                                <li>Leberecht Maass >>> Z1</li>
                                                <li>Belfast >>> Belfast</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">鋼鐵少女作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>扶桑 >>> 扶桑</li>
                                                <li>長門 >>> 長門</li>
                                                <li>大和 >>> 大和</li>
                                                <li>飛龍 >>> 飛龍</li>
                                                <li>瑞鳳 >>> 瑞鳳</li>
                                                <li>古鷹 >>> 古鷹</li>
                                                <li>夕張 >>> 夕張</li>
                                                <li>吹雪 >>> 吹雪</li>
                                                <li>磯風 >>> 磯風</li>
                                                <li>Karlsruhe >>> Karlsruhe</li>
                                                <li>Königsberg >>> Königsberg</li>
                                                <li>Hipper >>> Hipper</li>
                                                <li>Fletcher >>> Fletcher</li>
                                                <li>New Orleans >>> New Orleans</li>
                                                <li>Indianapolis >>> Indianapolis</li>
                                                <li>Ranger >>> Ranger</li>
                                                <li>Aurora >>> Aurora</li>
                                                <li>Warspite >>> Warspite</li>
                                                <li>鞍山 >>> 鞍山</li>
                                                <li>洛陽 >>> 洛陽</li>
                                                <li>Scharnhorst >>> Scharnhorst</li>
                                                <li>Gneisenau >>> Gneisenau</li>
                                                <li>Kirov >>> Kirov、泳裝Kirov</li>
                                                <li>Prinz Eugen >>> Prinz Eugen</li>
                                                <li>Benson >>> Benson</li>
                                                <li>Graf Spee >>> Graf Spee</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">November作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse ">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>Cleveland >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=47368234">Northampton</a></li>
                                                <li>Clemson >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=51862167">Edsall</a></li>
                                                <li>Wyoming >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=50549606">Arizona</a></li>
                                                <li>SouthCarolina >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=50549606">Maryland</a></li>
                                                <li>Sampson >>> Narwhal</li>
                                                <li>NewYork >>> Pennsylvania</li>
                                                <li>Wickes >>> Maury</li>
                                                <li>Montana >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=43572843">Louisiana</a></li>
                                                <li>NewMexico >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=45215476">Wisconsin</a></li>
                                                <li>Des Moines >>> Helena</li>
                                                <li>NorthCarolina >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=47811806">NewJersey</a></li>
                                                <li>Arizona >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=50549606">Arizona</a></li>
                                                <li>Independence >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=43810751">Independence</a></li>
                                                <li>Langley >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=51406297">Langley</a></li>
                                                <li>Iowa >>> <a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=44085445">Iowa</a></li>
                                                <li>Lexington >>> Lexington</li>
                                                <li>Marblehead >>> Marblehead</li>
                                                <li>Marblehead L >>> Marblehead</li>
                                                <li>Mahan >>> Mahan</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">Victory Belles作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse ">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>Mahan >>> Mahan</li>
                                                <li>Lexington >>> Lexington</li>
                                                <li>Graf Spee >>> Graf Spee</li>
                                                <li>New Orleans >>> New Orleans</li>
                                                <li>吹雪 >>> 吹雪</li>
                                                <li>飛龍 >>> 飛龍</li>
                                                <li>Nürnberg >>> Nürnberg</li>
                                                <li>Belfast >>> Belfast</li>
                                                <li>Kirov >>> Kirov</li>
                                                <li>北上 >>> 北上</li>
                                                <li>Scharnhorst >>> Scharnhorst</li>
                                                <li>Pensacola >>> Salt Lake City</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">碧藍航線作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse ">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>Arizona >>> Arizona</li>
                                                <li>atlanta >>> atlanta</li>
                                                <li>Bismarck >>> Bismarck</li>
                                                <li>bogue >>> bogue</li>
                                                <li>Fletcher >>> Fletcher</li>
                                                <li>Independence >>> Independence</li>
                                                <li>Indianapolis >>> Indianapolis/Portland</li>
                                                <li>Karlsruhe >>> Karlsruhe</li>
                                                <li>Konigsberg >>> Konigsberg</li>
                                                <li>Langley >>> Langley</li>
                                                <li>Leander >>> Leander</li>
                                                <li>Lexington >>> Lexington/Saratoga</li>
                                                <li>Cleveland >>> Northampton/Houston</li>
                                                <li>Omaha >>> Omaha</li>
                                                <li>phoenix >>> phoenix</li>
                                                <li>Prinz Eugen >>> Prinz Eugen</li>
                                                <li>ranger >>> ranger</li>
                                                <li>warspite >>> warspite/Queen Elizabeth</li>
                                                <li>Yorck >>> Yorck</li>
                                                <li>Leberecht Maass >>> z1</li>
                                                <li>New York >>> Pennsylvania</li>
                                                <li>利根 >>> 利根</li>
                                                <li>古鷹 >>> 古鷹</li>
                                                <li>妙高 >>> 妙高</li>
                                                <li>白露 >>> 白露/夕立</li>
                                                <li>築摩 >>> 築摩</li>
                                                <li>金剛 >>> 金剛</li>
                                                <li>長門 >>> 長門</li>
                                                <li>陽炎 >>> 陽炎</li>
                                                <li>青葉 >>> 青葉</li>
                                                <li>飛龍 >>> 飛龍/蒼龍</li>
                                                <li>龍驤 >>> 龍驤</li>
                                                <li>最上 >>> 最上</li>
                                                <li>翔鶴 >>> 翔鶴/瑞鶴</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl class="am-accordion-item">
                                    <dt class="am-accordion-title">其他作品對照</dt>
                                    <dd class="am-accordion-bd am-collapse ">
                                        <div class="am-accordion-content">
                                            <ul class="am-list am-list-static">
                                                <li>【<a href="https://twitter.com/kinona">紀奈</a>】<a href="http://seiga.nicovideo.jp/seiga/im4181804">三笠</a></li>
                                                <li>【<a href="http://www.weibo.com/fatem380">月天翔</a>】魔改【<a href="http://www.pixiv.net/member.php?id=141206">しずま</a>】零之島風</li>
                                                <li>【<a href="http://www.pixiv.net/member.php?id=141206">しずま</a>】大和</li>
                                                <li>【<a href="http://www.pixiv.net/member.php?id=7933104">司马闹腾</a>】<a href="http://www.pixiv.net/member_illust.php?mode=medium&illust_id=50899629">白龍</a></li>
                                                <li>【<a href="https://twitter.com/asaka142">安佐川</a>】出雲</li>
                                                <li>【<a href="https://twitter.com/kinona">紀奈</a>】<a href="http://seiga.nicovideo.jp/seiga/im5177431">浴衣三笠</a></li>
                                                <li>【<a href="http://www.pixiv.net/member.php?id=1391461">konnyaku</a>】秋月型</li>
                                                <li>【<a href="http://www.pixiv.net/member.php?id=1391461">konnyaku</a>】アイマス秋月型</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </section>
                        </div>
                        <hr class="am-article-divider am-show-sm-only">
                    </div>
                    <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
                        <h4 class="about-color"><i class="am-icon-list-ul"></i> 更新紀錄</h4>
                        <div class="am-scrollable-vertical update">
                            <ul class="am-list am-list-static am-list-border">
                                    <li>
                                        <span class="am-badge am-radius am-badge-warning">IMPORTANT</span><small class="am-text-warning">2016/12/06</small>
                                        <ul>
                                            <li>新增儲存紀錄功能</li>
                                        </ul>
                                    </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/12/06</small>
                                        <ul>
                                        <li>新增【碧藍航線】Leander</li>
                                        <li>新增【碧藍航線】Yorck</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/12/06</small>
                                    <ul>
                                        <li>新增【Victory Belles】Belfast</li>
                                        <li>新增【Victory Belles】Kirov</li>
                                        <li>新增【Victory Belles】北上</li>
                                        <li>新增【Victory Belles】Scharnhorst</li>
                                        <li>新增【Victory Belles】Pensacola</li>
                                        <li>新增【戰艦少女】Queen Elizabeth</li>
                                        <li>新增【碧藍航線】Arizona</li>
                                        <li>新增【碧藍航線】Atlanta</li>
                                        <li>新增【碧藍航線】Bismarck</li>
                                        <li>新增【碧藍航線】Bogue</li>
                                        <li>新增【碧藍航線】Fletcher</li>
                                        <li>新增【碧藍航線】Houston</li>
                                        <li>新增【碧藍航線】Independence</li>
                                        <li>新增【碧藍航線】Indianapolis</li>
                                        <li>新增【碧藍航線】Karlsruhe</li>
                                        <li>新增【碧藍航線】Konigsberg</li>
                                        <li>新增【碧藍航線】Langley</li>
                                        <li>新增【碧藍航線】Lexington</li>
                                        <li>新增【碧藍航線】Northampton</li>
                                        <li>新增【碧藍航線】Omaha</li>
                                        <li>新增【碧藍航線】Phoenix</li>
                                        <li>新增【碧藍航線】Portland</li>
                                        <li>新增【碧藍航線】Prinz Eugen</li>
                                        <li>新增【碧藍航線】Ranger</li>
                                        <li>新增【碧藍航線】Warspite</li>
                                        <li>新增【碧藍航線】Queen Elizabeth</li>
                                        <li>新增【碧藍航線】Saratoga</li>
                                        <li>新增【碧藍航線】Pennsylvania</li>
                                        <li>新增【碧藍航線】Z1</li>
                                        <li>新增【碧藍航線】利根</li>
                                        <li>新增【碧藍航線】古鷹</li>
                                        <li>新增【碧藍航線】妙高</li>
                                        <li>新增【碧藍航線】白露</li>
                                        <li>新增【碧藍航線】夕立</li>
                                        <li>新增【碧藍航線】築摩</li>
                                        <li>新增【碧藍航線】金剛</li>
                                        <li>新增【碧藍航線】長門</li>
                                        <li>新增【碧藍航線】陽炎</li>
                                        <li>新增【碧藍航線】蒼龍</li>
                                        <li>新增【碧藍航線】青葉</li>
                                        <li>新增【碧藍航線】飛龍</li>
                                        <li>新增【碧藍航線】龍驤</li>
                                        <li>新增【碧藍航線】翔鶴</li>
                                        <li>新增【碧藍航線】瑞鶴</li>
                                        <li>新增【碧藍航線】最上</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/12/05</small>
                                    <ul>
                                        <li>全艦重新排序</li>
                                        <li>更新效果預覽圖</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/12/05</small>
                                        <ul>
                                        <li>新增【戰艦少女】Belfast</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/12/05</small>
                                    <ul>
                                        <li>新增【艦隊收藏】野分</li>
                                        <li>新增【艦隊收藏】嵐</li>
                                        <li>新增【艦隊收藏】萩風</li>
                                        <li>新增【艦隊收藏】舞風</li>
                                        <li>新增【戰艦少女】嵐</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/12/04</small>
                                    <ul>
                                        <li>各艦變裝名稱更正</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/12/04</small>
                                    <ul>
                                        <li>新增【konnyaku】秋月</li>
                                        <li>新增【konnyaku】照月</li>
                                        <li>新增【konnyaku】初月</li>
                                        <li>新增【konnyaku】アイマス秋月</li>
                                        <li>新增【konnyaku】アイマス照月</li>
                                        <li>新增【konnyaku】アイマス初月</li>
                                        <li>新增【艦隊收藏】五月雨</li>
                                        <li>新增【艦隊收藏】山風</li>
                                        <li>新增【艦隊收藏】時雨</li>
                                        <li>新增【艦隊收藏】時雨 改二</li>
                                        <li>新增【艦隊收藏】時雨 クリスマスVer.</li>
                                        <li>新增【艦隊收藏】時雨 バレンタインVer.</li>
                                        <li>新增【艦隊收藏】時雨 夏季限定Ver.</li>
                                        <li>新增【艦隊收藏】時雨 すき家コラボVer.</li>
                                        <li>新增【艦隊收藏】時雨 鎮守府秋の秋刀魚祭りVer.</li>
                                        <li>新增【艦隊收藏】夕立</li>
                                        <li>新增【艦隊收藏】夕立 改二</li>
                                        <li>新增【艦隊收藏】夕立 年末年始Ver.</li>
                                        <li>新增【艦隊收藏】夕立 夏季限定Ver.</li>
                                        <li>新增【艦隊收藏】夕立 梅雨限定Ver.</li>
                                        <li>新增【艦隊收藏】夕立 なか卯コラボVer.</li>
                                        <li>新增【艦隊收藏】江風</li>
                                        <li>新增【艦隊收藏】江風 改二</li>
                                        <li>新增【艦隊收藏】江風 秋季限定Ver.</li>
                                        <li>新增【艦隊收藏】江風 クリスマスVer.</li>
                                        <li>新增【艦隊收藏】夕雲 鎮守府秋の秋刀魚祭りmode</li>
                                    </ul>
                                </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/12/03</small>
                                        <ul>
                                            <li>新增【戰艦少女】Z24</li>
                                            <li>新增【戰艦少女】Z28</li>
                                            <li>新增【鋼鐵少女】Graf Spee</li>
                                            <li>新增【戰艦少女】Graf Spee</li>
                                            <li>新增【戰艦少女】Leipzig</li>
                                            <li>新增【戰艦少女】Missouri</li>
                                            <li>新增【艦隊收藏】Z3 zwei</li>
                                            <li>新增【艦隊收藏】泳裝 Z3</li>
                                            <li>新增【艦隊收藏】Z1 zwei</li>
                                            <li>新增【艦隊收藏】午茶 Z1</li>
                                            <li>新增【戰艦少女】Z1</li>
                                            <li>新增【戰艦少女】Z1改</li>
                                            <li>新增【Victory Belles】Graf Spee</li>
                                            <li>新增【Victory Belles】Nürnberg</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/12/03</small>
                                        <ul>
                                            <li>新增【Victory Belles】吹雪</li>
                                            <li>新增【Victory Belles】飛龍</li>
                                            <li>新增【Victory Belles】Mahan</li>
                                            <li>新增【Victory Belles】Lexington</li>
                                            <li>新增【Victory Belles】New Orleans</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/12/02</small>
                                        <ul>
                                            <li>日驅逐線修正與更新</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/12/02</small>
                                        <ul>
                                            <li>新增【艦隊收藏】Saratoga</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/10/29</small>
                                        <ul>
                                            <li>新增【艦隊收藏】買い出し金剛</li>
                                            <li>新增【艦隊收藏】買い出し天城</li>
                                            <li>新增【艦隊收藏】秋刀魚扶桑</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/10/11</small>
                                        <ul>
                                            <li>新增【蒼藍鋼鐵戰艦】タカオ</li>
                                            <li>新增【鋼鐵少女】Benson</li>
                                            <li>新增【戰艦少女】Quincy Sapphire</li>
                                            <li>新增【戰艦少女】Atlanta改</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/10/11</small>
                                        <ul>
                                            <li>補齊新日驅階級</li>
                                            <li>為減輕伺服器負擔取消統計數據功能</li>
                                            <li>修復蒼藍鋼鐵戰艦部分背景問題</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/09/29</small>
                                        <ul>
                                            <li>新增【艦隊收藏】弥生</li>
                                            <li>新增【艦隊收藏】綾波</li>
                                            <li>新增【艦隊收藏】暁</li>
                                            <li>新增【艦隊收藏】秋月</li>
                                            <li>新增【艦隊收藏】若葉</li>
                                            <li>新增【艦隊收藏】白露</li>
                                            <li>新增【艦隊收藏】野分</li>
                                            <li>新增【艦隊收藏】夕雲</li>
                                            <li>新增【艦隊收藏】天津風</li>
                                            <li>新增【戰艦少女】綾波</li>
                                            <li>新增【戰艦少女】暁</li>
                                            <li>新增【戰艦少女】秋月</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/09/10</small>
                                        <ul>
                                            <li>新增【鋼鐵少女】Kirov、泳裝Kirov</li>
                                            <li>新增【鋼鐵少女】Prinz Eugen</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/09/09</small>
                                        <ul>
                                            <li>新增【戰艦少女】Edinburgh</li>
                                            <li>新增【戰艦少女】Emerald</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/09/01</small>
                                        <ul>
                                            <li>新增【艦隊收藏】秋祭り法被 吹雪</li>
                                            <li>新增【艦隊收藏】秋祭り法被 吹雪改二</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/08/25</small>
                                        <ul>
                                            <li>新增【蒼藍鋼鐵戰艦】ナチ</li>
                                            <li>新增【艦隊收藏】Prinz Eugen</li>
                                            <li>從Hipper中移除【艦隊收藏】Prinz Eugen可選項</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-warning">IMPORTANT</span><small class="am-text-warning">2016/08/23</small>
                                        <ul>
                                            <li>新增總下載次數與本月下載次數等統計資訊顯示</li>
                                            <li>統計資料每小時更新一次</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-warning">IMPORTANT</span><small class="am-text-warning">2016/08/21</small>
                                        <ul>
                                            <li>開始記錄下載資料</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/08/17</small>
                                        <ul>
                                            <li>新增【November】Mahan</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/08/17</small>
                                        <ul>
                                            <li>新增【戰艦少女】Houston、Houston改至Cleveland</li>
                                            <li>新增【戰艦少女】Washington至NorthCarolina</li>
                                            <li>新增【戰艦少女】Salt Lake City至Pensacola</li>
                                            <li>新增【戰艦少女】Quincy、Quincy改至New Orleans</li>
                                            <li>新增【戰艦少女】Portland至Indianapolis</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/08/16</small>
                                        <ul>
                                            <li>新增下拉選單分類排列</li>
                                            <li>修復warspite未出現在可替換分類問題</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/08/12</small>
                                        <ul>
                                            <li>新增【艦隊收藏】Warspite</li>
                                            <li>新增【戰艦少女】Gearing 海上漂流套装</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/08/07</small>
                                        <ul>
                                            <li>Bismarck編號由PGSB001改至PGSB108</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/08/07</small>
                                        <ul>
                                            <li>新增【艦隊收藏】泳裝大和</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/07/30</small>
                                        <ul>
                                            <li>新增【艦隊收藏】Prinz Eugen至Hipper</li>
                                            <li>新增【戰艦少女】St.Louis</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/07/29</small>
                                        <ul>
                                            <li>新增【戰艦少女】Gneisenau</li>
                                            <li>新增【鋼鐵少女】Gneisenau</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/07/29</small>
                                        <p>新增【戰艦少女】NorthCarolina。</p>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/07/17</small>
                                        <ul>
                                            <li>修正Marblehead L 與 神風 R 缺失問題</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/07/17</small>
                                        <ul>
                                            <li>新增【戰艦少女】Scharnhorst</li>
                                            <li>新增【鋼鐵少女】Scharnhorst</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/07/16</small>
                                        <ul>
                                            <li>新增【蒼藍鋼鐵戰艦】アシガラ</li>
                                            <li>新增【安佐川】出雲</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/07/16</small>
                                        <ul>
                                            <li>新增【艦隊收藏】泳裝扶桑</li>
                                            <li>新增【November】Independence</li>
                                            <li>新增【November】Langley</li>
                                            <li>新增【November】Iowa</li>
                                            <li>新增【November】Lexington</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/07/12</small>
                                        <ul>
                                            <li>新增【戰艦少女】日系校園泳裝青葉</li>
                                            <li>新增【戰艦少女】Strap bikini Lexington</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/06/30</small>
                                        <ul>
                                            <li>修正Aurora誤植Z24立繪之問題</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/30</small>
                                        <ul>
                                            <li>新增大量【鋼鐵少女】可選項</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/30</small>
                                        <ul>
                                            <li>新增大量【戰艦少女】美、德系可選項</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/27</small>
                                        <ul>
                                            <li>新增【November】Arizona</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/26</small>
                                        <ul>
                                            <li>新增【司马闹腾】白龍</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/06/25</small>
                                        <ul>
                                            <li>藏王更正為蔵王</li>
                                            <li>球摩更正為球磨</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">FIX</span><small class="am-text-danger">2016/06/23</small>
                                        <ul>
                                            <li>介面美化與更新</li>
                                            <li>新增船名、艦種與階級的顯示</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/23</small>
                                        <ul>
                                            <li>新增大量【戰艦少女】日系可選項</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/22</small>
                                        <ul>
                                            <li>新增【しずま】零之島風</li>
                                            <li>新增【しずま】大和</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/22</small>
                                        <ul>
                                            <li>新增大量【艦隊收藏】可選項</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/21</small>
                                        <ul>
                                            <li>新增【艦隊收藏】利根改二</li>
                                            <li>新增【艦隊收藏】Bismarck drei</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/06/21</small>
                                        <ul>
                                            <li>新增【艦隊收藏】築摩改二</li>
                                            <li>新增【艦隊收藏】泳裝天龍</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">IMPORTANT</span><small class="am-text-danger">2016/06/20</small>
                                        <ul>
                                            <li>TechTreeMoe Beta網站上線</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/06/19</small>
                                        <ul>
                                            <li>新增【鋼鐵少女】伊吹</li>
                                            <li>新增【November】蔵王</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-danger">IMPORTANT</span><small class="am-text-danger">2016/05/28</small>
                                        <ul>
                                            <li>取消指揮官發佈</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/05/21</small>
                                        <ul>
                                            <li>新增【鋼鐵少女】洛陽</li>
                                            <li>新增【艦隊收藏】利根</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/05/18</small>
                                        <ul>
                                            <li>新增【November】St.Louis</li>
                                            <li>新增【紀奈】三笠</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-warning">FIX</span><small class="am-text-warning">2016/05/18</small>
                                        <ul>
                                            <li>修復【戰艦少女】Mahan灰圖誤植</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/05/16</small>
                                        <ul>
                                            <li>新增【戰艦少女】Indianapolis</li>
                                            <li>新增【鋼鐵少女】鞍山</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-primary">NEW</span><small class="am-text-primary">2016/05/05</small>
                                        <ul>
                                            <li>新增【艦隊收藏】神風</li>
                                            <li>新增【戰艦少女】Warspite</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="am-badge am-radius am-badge-success">UPDATE</span><small class="am-text-success">2016/05/05</small>
                                        <ul>
                                            <li>更新【November】IOWA至【艦隊收藏】IOWA</li>
                                        </ul>
                                    </li>
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
            <?php echo human_filesize($totalsize) ?>
        </p>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/amazeui.min.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/js.cookie.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>