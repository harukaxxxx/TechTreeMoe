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
          <!--日本-->
            <div id="PJSC035" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅱ</span>築摩</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC035-3.png"></div>
                </div>
                <select name="PJSC035" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC035-1">【艦隊收藏】築摩</option>
      <option value="PJSC035-2">【艦隊收藏】築摩 改二</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC035-3" selected>【碧藍航線】築摩</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC015" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅲ</span>天龍</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC015-5.png"></div>
                </div>
                <select name="PJSC015" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC015-1">【艦隊收藏】天龍</option>
      <option value="PJSC015-2">【艦隊收藏】天龍 夏季限定Ver.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC015-3">【戰艦少女】天龍</option>
      <option value="PJSC015-4">【戰艦少女】天龍 女僕Ver.</option>
      <option value="PJSC015-5" selected>【戰艦少女】天龍 改</option>
            </optgroup>
    </select>
            </div>
            <div id="PJSC013" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅳ</span>球磨</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC013-2.png"></div>
                </div>
                <select name="PJSC013" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC013-1">【艦隊收藏】球磨</option>
      <option value="PJSC013-2" selected>【艦隊收藏】球磨 秋季限定Ver.</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC005" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>古鷹</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC005-3.png"></div>
                </div>
                <select name="PJSC005" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC005-1">【艦隊收藏】古鷹</option>
      <option value="PJSC005-2">【艦隊收藏】古鷹 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC005-3" selected>【戰艦少女】古鷹</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSC005-4">【鋼鐵少女】古鷹</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC005-5">【碧藍航線】古鷹</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC007" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅵ</span>青葉</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC007-2.png"></div>
                </div>
                <select name="PJSC007" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC007-1">【艦隊收藏】青葉</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC007-2" selected>【戰艦少女】青葉</option>
      <option value="PJSC007-3">【戰艦少女】青葉 紅白偶像Ver.</option>
      <option value="PJSC007-4">【戰艦少女】青葉 日系學校泳裝Ver.</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC007-5">【碧藍航線】青葉</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC008" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>妙高</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC008-3.png"></div>
                </div>
                <select name="PJSC008" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC008-1">【艦隊收藏】妙高</option>
      <option value="PJSC008-2">【艦隊收藏】妙高 改二</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC008-3" selected>【碧藍航線】妙高</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC009" class="mix cruiser japan change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>最上</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC009-5.png"></div>
                </div>
                <select name="PJSC009" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC009-1">【艦隊收藏】最上</option>
      <option value="PJSC009-2">【艦隊收藏】最上 梅雨限定Ver.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC009-3">【戰艦少女】最上</option>
      <option value="PJSC009-4">【戰艦少女】最上 校服Ver.</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC009-5" selected>【碧藍航線】最上</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC012" class="mix cruiser japan">
                <p class="ship icon-cruiser"><span class="tier">Ⅸ</span>伊吹</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC012-1.png"></div>
                </div>
                <select name="PJSC012" data-am-selected>
          <optgroup label="鋼鐵少女">
      <option value="PJSC012-1" selected>【鋼鐵少女】伊吹</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC034" class="mix cruiser japan">
                <p class="ship icon-cruiser"><span class="tier">Ⅹ</span>蔵王</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC034-1.png"></div>
                </div>
                <select name="PJSC034" data-am-selected>
          <optgroup label="November">
      <option value="PJSC034-1" selected>【November】蔵王</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD002" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅱ</span>海風</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD002-3.png"></div>
                </div>
                <select name="PJSD002" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD002-1">【艦隊收藏】海風</option>
      <option value="PJSD002-2">【艦隊收藏】五月雨</option>
      <option value="PJSD002-3" selected>【艦隊收藏】山風</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD003" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅳ</span>磯風</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD003-1.png"></div>
                </div>
                <select name="PJSD003" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD003-1" selected>【艦隊收藏】磯風</option>
      <option value="PJSD003-2">【艦隊收藏】磯風 秋季限定Ver.</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSD003-3">【鋼鐵少女】磯風</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD105" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅴ</span>睦月</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD105-2.png"></div>
                </div>
                <select name="PJSD105" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD105-1">【艦隊收藏】睦月</option>
      <option value="PJSD105-2" selected>【艦隊收藏】睦月 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSD105-3">【戰艦少女】睦月</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD206" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅵ</span>初春</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD206-2.png"></div>
                </div>
                <select name="PJSD206" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD206-1" selected>【艦隊收藏】初春</option>
      <option value="PJSD206-2" selected>【艦隊收藏】初春 改二</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD106" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅵ</span>吹雪</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD106-4.png"></div>
                </div>
                <select name="PJSD106" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD106-1">【艦隊收藏】吹雪</option>
      <option value="PJSD106-2">【艦隊收藏】吹雪 改二</option>
      <option value="PJSD106-6">【艦隊收藏】吹雪 鎮守府秋祭りVer.</option>
      <option value="PJSD106-7">【艦隊收藏】吹雪 改二 鎮守府秋祭りVer.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSD106-3">【戰艦少女】吹雪</option>
      <option value="PJSD106-4" selected>【戰艦少女】吹雪 改</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSD106-5">【鋼鐵少女】吹雪</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PJSD106-8">【Victory Belles】吹雪</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD107" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅶ</span>曉</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD107-2.png"></div>
                </div>
                <select name="PJSD107" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD107-1">【艦隊收藏】曉</option>
            <option value="PJSD107-2" selected>【艦隊收藏】曉 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
            <option value="PJSD107-3">【戰艦少女】曉</option>
            <option value="PJSD107-4">【戰艦少女】曉 改</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD207" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅶ</span>白露</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD207-14.png"></div>
                </div>
                <select name="PJSD207" data-am-selected>
          <optgroup label="艦隊收藏">
            <option value="PJSD207-1">【艦隊收藏】白露</option>
            <option value="PJSD207-2">【艦隊收藏】白露 改</option>
            <option value="PJSD207-3">【艦隊收藏】白露 夏季限定Ver.</option>
            <option value="PJSD207-4">【艦隊收藏】白露 Android先行試験運用限定Ver.</option>
            <option value="PJSD207-5">【艦隊收藏】白露 鎮守府秋祭りVer.</option>
            <option value="PJSD207-6">【艦隊收藏】時雨</option>
            <option value="PJSD207-7">【艦隊收藏】時雨 改二</option>
            <option value="PJSD207-8">【艦隊收藏】時雨 クリスマスVer.</option>
            <option value="PJSD207-9">【艦隊收藏】時雨 バレンタインVer.</option>
            <option value="PJSD207-10">【艦隊收藏】時雨 夏季限定Ver.</option>
            <option value="PJSD207-11">【艦隊收藏】時雨 すき家コラボVer.</option>
            <option value="PJSD207-12">【艦隊收藏】時雨 鎮守府秋の秋刀魚祭りVer.</option>
            <option value="PJSD207-13">【艦隊收藏】夕立</option>
            <option value="PJSD207-14" selected>【艦隊收藏】夕立 改二</option>
            <option value="PJSD207-15">【艦隊收藏】夕立 年末年始Ver.</option>
            <option value="PJSD207-16">【艦隊收藏】夕立 夏季限定Ver.</option>
            <option value="PJSD207-17">【艦隊收藏】夕立 梅雨限定Ver.</option>
            <option value="PJSD207-18">【艦隊收藏】夕立 なか卯コラボVer.</option>
            <option value="PJSD207-19">【艦隊收藏】江風</option>
            <option value="PJSD207-20">【艦隊收藏】江風 改二</option>
            <option value="PJSD207-21">【艦隊收藏】江風 秋季限定Ver.</option>
            <option value="PJSD207-22">【艦隊收藏】江風 クリスマスVer.</option>
          </optgroup>
          <optgroup label="碧藍航線">
            <option value="PJSD207-23">【碧藍航線】白露</option>
            <option value="PJSD207-24">【碧藍航線】夕立</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD208" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅷ</span>陽炎</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD208-8.png"></div>
                </div>
                <select name="PJSD208" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD208-1">【艦隊收藏】陽炎</option>
      <option value="PJSD208-3">【艦隊收藏】野分</option>
      <option value="PJSD208-4">【艦隊收藏】嵐</option>
      <option value="PJSD208-5">【艦隊收藏】萩風</option>
      <option value="PJSD208-6">【艦隊收藏】舞風</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSD208-2">【戰艦少女】陽炎</option>
      <option value="PJSD208-7">【戰艦少女】嵐</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSD208-8" selected>【碧藍航線】陽炎</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD108" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅷ</span>秋月</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD108-7.png"></div>
                </div>
                <select name="PJSD108" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD108-1">【艦隊收藏】秋月</option>
            <option value="PJSD108-2">【艦隊收藏】秋月 鎮守府秋祭りVer.</option>
          </optgroup>
          <optgroup label="戰艦少女">
            <option value="PJSD108-3">【戰艦少女】秋月</option>
          </optgroup>
          <optgroup label="konnyaku">
            <option value="PJSD108-4">【konnyaku】秋月</option>
            <option value="PJSD108-5">【konnyaku】照月</option>
            <option value="PJSD108-6">【konnyaku】初月</option>
            <option value="PJSD108-7" selected>【konnyaku】秋月 アイマスVer.</option>
            <option value="PJSD108-8">【konnyaku】照月 アイマスVer.</option>
            <option value="PJSD108-9">【konnyaku】初月 アイマスVer.</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD209" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅸ</span>夕雲</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD209-3.png"></div>
                </div>
                <select name="PJSD209" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD209-1">【艦隊收藏】夕雲</option>
            <option value="PJSD209-2">【艦隊收藏】夕雲 年始(2016年)mode</option>
            <option value="PJSD209-3" selected>【艦隊收藏】夕雲 春の花束mode</option>
            <option value="PJSD209-4">【艦隊收藏】夕雲 鎮守府秋の秋刀魚祭りmode</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD012" class="mix destroyer japan change">
                <p class="ship icon-destroyer"><span class="tier">Ⅹ</span>島風</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD012-2.png"></div>
                </div>
                <select name="PJSD012" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD012-1">【艦隊收藏】島風</option>
          </optgroup>
      <optgroup label="戰艦少女">
      <option value="PJSD012-3">【戰艦少女】島風</option>
      </optgroup>
      <optgroup label="同人作品">
      <option value="PJSD012-2" selected>【しずま】零之島風</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB007" class="mix battleship japan change">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>金剛</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB007-2.png"></div>
                </div>
                <select name="PJSB007" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSB007-1">【艦隊收藏】金剛</option>
      <option value="PJSB007-2" selected>【艦隊收藏】金剛 改二</option>
      <option value="PJSB007-4">【艦隊收藏】金剛 なか卯コラボVer.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSB007-3">【戰艦少女】金剛</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSB007-5">【碧藍航線】金剛</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB006" class="mix battleship japan change">
                <p class="ship icon-battleship"><span class="tier">Ⅵ</span>扶桑</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB006-1.png"></div>
                </div>
                <select name="PJSB006" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSB006-1" selected>【艦隊收藏】扶桑</option>
      <option value="PJSB006-2">【艦隊收藏】扶桑 新年の晴れ着mode</option>
      <option value="PJSB006-5">【艦隊收藏】扶桑 夏季限定(2016)Ver.</option>
      <option value="PJSB006-6">【艦隊收藏】扶桑 鎮守府秋の秋刀魚祭りmode</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSB006-3">【戰艦少女】扶桑</option>
      </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSB006-4">【鋼鐵少女】扶桑</option>
      </optgroup>
      
    </select>
            </div>
            <div id="PJSB010" class="mix battleship japan change">
                <p class="ship icon-battleship"><span class="tier">Ⅶ</span>長門</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB010-1.png"></div>
                </div>
                <select name="PJSB010" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSB010-1" selected>【艦隊收藏】長門</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSB010-2">【戰艦少女】長門</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSB010-3">【鋼鐵少女】長門</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSB010-4">【碧藍航線】長門</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB013" class="mix battleship japan change">
                <p class="ship icon-battleship"><span class="tier">Ⅷ</span>天城</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB013-3.png"></div>
                </div>
                <select name="PJSB013" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSB013-1">【艦隊收藏】天城</option>
      <option value="PJSB013-2">【艦隊收藏】天城 改</option>
      <option value="PJSB013-3" selected>【艦隊收藏】天城 新春の晴れ着mode</option>
      <option value="PJSB013-4">【艦隊收藏】天城 なか卯コラボVer.</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB021" class="mix battleship japan">
                <p class="ship icon-battleship"><span class="tier">Ⅸ</span>出雲</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB021-1.png"></div>
                </div>
                <select name="PJSB021" data-am-selected>
          <optgroup label="同人作品">
      <option value="PJSB021-1">【安佐川】出雲</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB018" class="mix battleship japan change">
                <p class="ship icon-battleship"><span class="tier">Ⅹ</span>大和</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB018-2.png"></div>
                </div>
                <select name="PJSB018" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSB018-1">【艦隊收藏】大和</option>
      <option value="PJSB018-4">【艦隊收藏】大和 夏季限定(2016)Ver.</option>
          </optgroup>
          
          <optgroup label="鋼鐵少女">
      <option value="PJSB018-3">【鋼鐵少女】大和</option>
          </optgroup>
      <optgroup label="同人作品">
      <option value="PJSB018-2" selected>【しずま】大和</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA002" class="mix aircarrier japan">
                <p class="ship icon-aircarrier"><span class="tier">Ⅳ</span>鳳翔</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA002-1.png"></div>
                </div>
                <select name="PJSA002" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA002-1" selected>【艦隊收藏】鳳翔</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA006" class="mix aircarrier japan change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅴ</span>瑞鳳</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA006-2.png"></div>
                </div>
                <select name="PJSA006" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA006-1">【艦隊收藏】瑞鳳</option>
      <option value="PJSA006-2" selected>【艦隊收藏】瑞鳳 改</option>
      <option value="PJSA006-3">【艦隊收藏】瑞鳳 晴れ着Ver.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSA006-4">【戰艦少女】瑞鳳</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSA006-5">【鋼鐵少女】瑞鳳</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA009" class="mix aircarrier japan change">
                <p class="ship icon-aircarrier"></span><span class="tier">Ⅵ</span>龍驤</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA009-3.png"></div>
                </div>
                <select name="PJSA009" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA009-1">【艦隊收藏】龍驤</option>
      <option value="PJSA009-2">【艦隊收藏】龍驤 改</option>
      <option value="PJSA009-3" selected>【艦隊收藏】龍驤 改二</option>
      <option value="PJSA009-4">【艦隊收藏】龍驤 クリスマスVer.</option>
      <option value="PJSA009-5">【艦隊收藏】龍驤 改二 クリスマスVer.</option>
      <option value="PJSA009-6">【艦隊收藏】龍驤 すき家コラボVer.</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSA009-7">【碧藍航線】龍驤</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA011" class="mix aircarrier japan change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅶ</span>飛龍</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA011-2.png"></div>
                </div>
                <select name="PJSA011" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA011-1">【艦隊收藏】飛龍</option>
      <option value="PJSA011-2" selected>【艦隊收藏】飛龍 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSA011-3">【戰艦少女】飛龍</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PJSA011-4">【鋼鐵少女】飛龍</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PJSA011-5">【Victory Belles】飛龍</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSA011-6">【碧藍航線】飛龍</option>
      <option value="PJSA011-7">【碧藍航線】蒼龍</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA012" class="mix aircarrier japan change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅷ</span>翔鶴</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA012-2.png"></div>
                </div>
                <select name="PJSA012" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA012-1">【艦隊收藏】翔鶴</option>
      <option value="PJSA012-2" selected>【艦隊收藏】翔鶴 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSA012-3">【戰艦少女】翔鶴</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSA012-4">【碧藍航線】翔鶴</option>
      <option value="PJSA012-5">【碧藍航線】瑞鶴</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA015" class="mix aircarrier japan change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅸ</span>大鳳</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA015-1.png"></div>
                </div>
                <select name="PJSA015" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSA015-1" selected>【艦隊收藏】大鳳</option>
      <option value="PJSA015-2">【艦隊收藏】大鳳 改</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSA015-3">【戰艦少女】大鳳</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSA017" class="mix aircarrier japan">
                <p class="ship icon-aircarrier"><span class="tier">Ⅹ</span>白龍</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSA017-1.png"></div>
                </div>
                <select name="PJSA017" data-am-selected>
          <optgroup label="同人作品">
      <option value="PJSA017-1" selected>【司马闹腾】白龍</option>
          </optgroup>
    </select>
            </div>
            <!--金船-->
            <div id="PJSC503" class="mix cruiser japan premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅲ</span>香取</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC503-2.png"></div>
                </div>
                <select name="PJSC503" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC503-1">【艦隊收藏】香取</option>
      <option value="PJSC503-2" selected>【艦隊收藏】香取 新春の晴れ着mode</option>
      <option value="PJSC503-3">【艦隊收藏】鹿島</option>
      <option value="PJSC503-4">【艦隊收藏】鹿島 クリスマスVer.</option>
      <option value="PJSC503-5">【艦隊收藏】鹿島 バレンタインVer.</option>
      </optgroup>
    </select>
            </div>
            <div id="PJSC004" class="mix cruiser japan premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅳ</span>夕張</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC004-2.png"></div>
                </div>
                <select name="PJSC004" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC004-1">【艦隊收藏】夕張</option>
      <option value="PJSC004-2" selected>【艦隊收藏】夕張 梅雨限定Ver.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC004-3">【戰艦少女】夕張</option>
      <option value="PJSC004-4">【戰艦少女】夕張 改</option>
      <option value="PJSC004-5">【鋼鐵少女】夕張</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC014" class="mix cruiser japan premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>北上</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC014-2.png"></div>
                </div>
                <select name="PJSC014" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC014-1">【艦隊收藏】北上</option>
      <option value="PJSC014-2" selected>【艦隊收藏】北上 改二</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC014-3">【戰艦少女】北上</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PJSC014-4">【Victory Belles】北上</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC038" class="mix cruiser japan premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>愛宕</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC038-1.png"></div>
                </div>
                <select name="PJSC038" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC038-1" selected>【艦隊收藏】愛宕</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PJSC038-2">【戰艦少女】愛宕</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC018" class="mix cruiser japan premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>利根</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC018-2.png"></div>
                </div>
                <select name="PJSC018" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSC018-1">【艦隊收藏】利根</option>
      <option value="PJSC018-2" selected>【艦隊收藏】利根 改二</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PJSC018-3">【碧藍航線】利根</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD025" class="mix destroyer japan premium">
                <p class="ship icon-destroyer"><span class="tier">Ⅴ</span>神風</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD025-1.png"></div>
                </div>
                <select name="PJSD025" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD025-1" selected>【艦隊收藏】神風</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSD026" class="mix destroyer japan premium">
                <p class="ship icon-destroyer"><span class="tier">Ⅴ</span>神風R</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSD026-1.png"></div>
                </div>
                <select name="PJSD026" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PJSD026-1" selected>【艦隊收藏】神風</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB011" class="mix battleship japan premium">
                <p class="ship icon-battleship"><span class="tier">Ⅱ</span>三笠</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB011-1.png"></div>
                </div>
                <select name="PJSB011" data-am-selected>
          <optgroup label="同人作品">
      <option value="PJSB011-1" selected>【紀奈】三笠</option>
      <option value="PJSB011-2">【紀奈】三笠 浴衣Ver.</option>
          </optgroup>
    </select>
            </div>
            <!--ARP-->
            <div id="PJSB705" class="mix battleship japan ARP">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>コンゴウ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB705-1.png"></div>
                </div>
                <select name="PJSB705" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSB705-1" selected>【蒼藍鋼鐵戰艦】コンゴウ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB708" class="mix battleship japan ARP">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>ヒエイ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB708-1.png"></div>
                </div>
                <select name="PJSB708" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSB708-1" selected>【蒼藍鋼鐵戰艦】ヒエイ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB706" class="mix battleship japan ARP">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>キリシマ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB706-1.png"></div>
                </div>
                <select name="PJSB706" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSB706-1" selected>【蒼藍鋼鐵戰艦】キリシマ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSB707" class="mix battleship japan ARP">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>ハルナ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSB707-1.png"></div>
                </div>
                <select name="PJSB707" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSB707-1" selected>【蒼藍鋼鐵戰艦】ハルナ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC705" class="mix cruiser japan ARP">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>ミョウコウ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC705-1.png"></div>
                </div>
                <select name="PJSC705" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSC705-1" selected>【蒼藍鋼鐵戰艦】ミョウコウ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC709" class="mix cruiser japan ARP">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>ハグロ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC709-1.png"></div>
                </div>
                <select name="PJSC709" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSC709-1" selected>【蒼藍鋼鐵戰艦】ハグロ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC707" class="mix cruiser japan ARP">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>アシガラ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC707-1.png"></div>
                </div>
                <select name="PJSC707" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSC707-1" selected>【蒼藍鋼鐵戰艦】アシガラ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC737" class="mix cruiser japan ARP">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>ナチ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC737-1.png"></div>
                </div>
                <select name="PJSC737" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSC737-1" selected>【蒼藍鋼鐵戰艦】ナチ</option>
          </optgroup>
    </select>
            </div>
            <div id="PJSC708" class="mix cruiser japan ARP">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>タカオ</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PJSC708-1.png"></div>
                </div>
                <select name="PJSC708" data-am-selected>
          <optgroup label="蒼藍鋼鐵戰艦">
      <option value="PJSC708-1" selected>【蒼藍鋼鐵戰艦】タカオ</option>
          </optgroup>
    </select>
            </div>
            <!--美國-->
            <div id="PASD002" class="mix destroyer usa">
                <p class="ship icon-destroyer"><span class="tier">Ⅱ</span>Sampson</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD002-1.png"></div>
                </div>
                <select name="PASD002" data-am-selected>
          <optgroup label="November">
      <option value="PASD002-1" selected>【November】Narwhal</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD027" class="mix destroyer usa">
                <p class="ship icon-destroyer"><span class="tier">Ⅲ</span>Wickes</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD027-1.png"></div>
                </div>
                <select name="PASD027" data-am-selected>
          <optgroup label="November">
      <option value="PASD027-1" selected>【November】Maury</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD019" class="mix destroyer usa change">
                <p class="ship icon-destroyer"><span class="tier">Ⅳ</span>Clemson</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD019-1.png"></div>
                </div>
                <select name="PASD019" data-am-selected>
          <optgroup label="November">
      <option value="PASD019-1" selected>【November】Edsall</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD006" class="mix destroyer usa">
                <p class="ship icon-destroyer"><span class="tier">Ⅶ</span>Mahan</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD006-1.png"></div>
                </div>
                <select name="PASD006" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASD006-1" selected>【戰艦少女】Mahan</option>
          </optgroup>
          <optgroup label="November">
      <option value="PASD006-2">【November】Mahan</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PASD006-3">【Victory Belles】Mahan</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD008" class="mix destroyer usa change">
                <p class="ship icon-destroyer"><span class="tier">Ⅷ</span>Benson</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD008-2.png"></div>
                </div>
                <select name="PASD008" data-am-selected>
          <optgroup label="November">
      <option value="PASD008-1">【November】Benson</option>
          </optgroup>
          <optgroup label="'鋼鐵少女">
      <option value="PASD008-2" selected>【鋼鐵少女】Benson</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD021" class="mix destroyer usa change">
                <p class="ship icon-destroyer"><span class="tier">Ⅸ</span>Fletcher</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD021-2.png"></div>
                </div>
                <select name="PASD021" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASD021-1">【戰艦少女】Fletcher</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PASD021-2" selected>【鋼鐵少女】Fletcher</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASD021-3">【碧藍航線】Fletcher</option>
          </optgroup>
    </select>
            </div>
            <div id="PASD013" class="mix destroyer usa change">
                <p class="ship icon-destroyer"><span class="tier">Ⅹ</span>Gearing</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASD013-2.png"></div>
                </div>
                <select name="PASD013" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASD013-1">【戰艦少女】Gearing</option>
      <option value="PASD013-2" selected>【戰艦少女】Gearing 改</option>
      <option value="PASD013-3">【戰艦少女】Gearing 海上漂流套装Ver.</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC002" class="mix cruiser usa">
                <p class="ship icon-cruiser"><span class="tier">Ⅱ</span>Chester</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC002-1.png"></div>
                </div>
                <select name="PASC002" data-am-selected>
          <optgroup label="November">
      <option value="PASC002-1" selected>【November】Chester</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC004" class="mix cruiser usa change">
                <p class="ship icon-cruiser"><span class="tier">Ⅲ</span>St. Louis</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC004-1.png"></div>
                </div>
                <select name="PASC004" data-am-selected>
          <optgroup label="November">
      <option value="PASC004-1" selected>【November】St. Louis</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PASC004-2">【戰艦少女】St. Louis</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC024" class="mix cruiser usa change">
                <p class="ship icon-cruiser"><span class="tier">Ⅳ</span>Phoenix</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC024-2.png"></div>
                </div>
                <select name="PASC024" data-am-selected>
          <optgroup label="November">
      <option value="PASC024-1">【November】Phoenix</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASC024-2" selected>【碧藍航線】Phoenix</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC005" class="mix cruiser usa change">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Omaha</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC005-2.png"></div>
                </div>
                <select name="PASC005" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASC005-1">【戰艦少女】Omaha</option>
      <option value="PASC005-2" selected>【戰艦少女】Omaha 改</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASC005-3">【碧藍航線】Omaha</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC007" class="mix cruiser usa change">
                <p class="ship icon-cruiser"><span class="tier">Ⅵ</span>Cleveland</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC007-3.png"></div>
                </div>
                <select name="PASC007" data-am-selected>
          <optgroup label="November">
      <option value="PASC007-1">【November】Northampton</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PASC007-2">【戰艦少女】Houston</option>
            <option value="PASC007-3" selected>【戰艦少女】Houston 改</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASC007-4" selected>【碧藍航線】Northampton</option>
      <option value="PASC007-5" selected>【碧藍航線】Houston</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC012" class="mix cruiser usa">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>Pensacola</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC012-2.png"></div>
                </div>
                <select name="PASC012" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASC012-1">【戰艦少女】Pensacola</option>
            <option value="PASC012-2" selected>【戰艦少女】Salt Lake City</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PASC012-3">【Victory Belles】Salt Lake City</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC014" class="mix cruiser usa change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>New Orleans</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC014-2.png"></div>
                </div>
                <select name="PASC014" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASC014-1">【戰艦少女】New Orleans</option>
      <option value="PASC014-2" selected>【戰艦少女】New Orleans 改</option>
            <option value="PASC014-4">【戰艦少女】Quincy</option>
            <option value="PASC014-5">【戰艦少女】Quincy 改</option>
            <option value="PASC014-6">【戰艦少女】Quincy SapphireVer.</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PASC014-3">【鋼鐵少女】New Orleans</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PASC014-7">【Victory Belles】New Orleans</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC020" class="mix cruiser usa">
                <p class="ship icon-cruiser"><span class="tier">Ⅹ</span>Des Moines</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC020-1.png"></div>
                </div>
                <select name="PASC020" data-am-selected>
          <optgroup label="November">
      <option value="PASC020-1" selected>【November】Helena</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB001" class="mix battleship usa">
                <p class="ship icon-battleship"><span class="tier">Ⅲ</span>S. Carolina</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB001-1.png"></div>
                </div>
                <select name="PASB001" data-am-selected>
          <optgroup label="November">
      <option value="PASB001-1" selected>【November】Maryland</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB004" class="mix battleship usa">
                <p class="ship icon-battleship"><span class="tier">Ⅳ</span>Wyoming</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB004-1.png"></div>
                </div>
                <select name="PASB004" data-am-selected>
          <optgroup label="November">
      <option value="PASB004-1" selected>【November】Arizona</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB006" class="mix battleship usa change">
                <p class="ship icon-battleship"><span class="tier">Ⅴ</span>New York</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB006-2.png"></div>
                </div>
                <select name="PASB006" data-am-selected>
          <optgroup label="November">
      <option value="PASB006-1">【November】Pennsylvania</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASB006-2" selected>【碧藍航線】Pennsylvania</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB034" class="mix battleship usa">
                <p class="ship icon-battleship"><span class="tier">Ⅵ</span>New Mexico</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB034-1.png"></div>
                </div>
                <select name="PASB034" data-am-selected>
          <optgroup label="November">
      <option value="PASB034-1" selected>【November】Wisconsin</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB008" class="mix battleship usa change">
                <p class="ship icon-battleship"><span class="tier">Ⅶ</span>Colorado</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB008-2.png"></div>
                </div>
                <select name="PASB008" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASB008-1">【戰艦少女】Colorado</option>
      <option value="PASB008-2" selected>【戰艦少女】Colorado 改</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB012" class="mix battleship usa change">
                <p class="ship icon-battleship"><span class="tier">Ⅷ</span>N. Carolina</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB012-2.png"></div>
                </div>
                <select name="PASB012" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASB012-2" selected>【戰艦少女】N. Carolina</option>
      <option value="PASB012-3">【戰艦少女】Washington</option>
      </optgroup>
          <optgroup label="November">
      <option value="PASB012-1">【November】NewJersey</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB018" class="mix battleship usa change">
                <p class="ship icon-battleship"><span class="tier">Ⅸ</span>Iowa</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB018-1.png"></div>
                </div>
                <select name="PASB018" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PASB018-1" selected>【艦隊收藏】Iowa</option>
          </optgroup>
          <optgroup label="November">
      <option value="PASB018-2">【November】Iowa</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB017" class="mix battleship usa">
                <p class="ship icon-battleship"><span class="tier">Ⅹ</span>Montana</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB017-1.png"></div>
                </div>
                <select name="PASB017" data-am-selected>
          <optgroup label="November">
      <option value="PASB017-1" selected>【November】Louisiana</option>
          </optgroup>
    </select>
            </div>
            <div id="PASA004" class="mix aircarrier usa change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅳ</span>Langley</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA004-3.png"></div>
                </div>
                <select name="PASA004" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASA004-1">【戰艦少女】Langley</option>
          </optgroup>
      <optgroup label="November">
      <option value="PASA004-2">【November】Langley</option>
      </optgroup>
      <optgroup label="碧藍航線">
      <option value="PASA004-3" selected>【碧藍航線】Langley</option>
      </optgroup>
    </select>
            </div>
            <div id="PASA002" class="mix aircarrier usa change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅴ</span>Bogue</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA002-2.png"></div>
                </div>
                <select name="PASA002" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASA002-1">【戰艦少女】Bogue</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASA002-2" selected>【碧藍航線】Bogue</option>
          </optgroup>
    </select>
            </div>
            <div id="PASA006" class="mix aircarrier usa change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅵ</span>Independence</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA006-4.png"></div>
                </div>
                <select name="PASA006" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASA006-1">【戰艦少女】Independence</option>
      <option value="PASA006-2">【戰艦少女】Independence 白色惡魔Ver.</option>
          </optgroup>
          <optgroup label="November">
      <option value="PASA006-3">【November】Independence</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASA006-4" selected>【碧藍航線】Independence</option>
          </optgroup>
    </select>
            </div>
            <div id="PASA010" class="mix aircarrier usa change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅶ</span>Ranger</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA010-5.png"></div>
                </div>
                <select name="PASA010" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASA010-1">【戰艦少女】Ranger</option>
      <option value="PASA010-2">【戰艦少女】Ranger 改</option>
      <option value="PASA010-3">【戰艦少女】Ranger HeartCatchRabbitVer.</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PASA010-4">【鋼鐵少女】Ranger</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASA010-5" selected>【碧藍航線】Ranger</option>
          </optgroup>
    </select>
            </div>
            <div id="PASA012" class="mix aircarrier usa change">
                <p class="ship icon-aircarrier"><span class="tier">Ⅷ</span>Lexington</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA012-8.png"></div>
                </div>
                <select name="PASA012" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PASA012-6">【艦隊收藏】Saratoga</option>
      <option value="PASA012-8" selected>【艦隊收藏】Saratoga 改</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PASA012-1">【戰艦少女】Lexington</option>
      <option value="PASA012-2">【戰艦少女】Lexington 改</option>
      <option value="PASA012-3">【戰艦少女】Lexington LoveBlueVer.</option>
      <option value="PASA012-4">【戰艦少女】Lexington Strap bikiniVer.</option>
          </optgroup>
          <optgroup label="November">
      <option value="PASA012-5">【November】Lexington</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PASA012-7">【Victory Belles】Lexington</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASA012-9">【碧藍航線】Lexington</option>
      <option value="PASA012-10">【碧藍航線】Saratoga</option>
          </optgroup>
    </select>
            </div>
            <div id="PASA013" class="mix aircarrier usa">
                <p class="ship icon-aircarrier"><span class="tier">Ⅸ</span>Essex</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASA013-1.png"></div>
                </div>
                <select name="PASA013" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASA013-1" selected>【戰艦少女】Essex</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC044" class="mix cruiser usa premium">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Marblehead</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC044-1.png"></div>
                </div>
                <select name="PASC044" data-am-selected>
          <optgroup label="November">
      <option value="PASC044-1" selected>【November】Marblehead</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC045" class="mix cruiser usa premium">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Marblehead L</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC045-1.png"></div>
                </div>
                <select name="PASC045" data-am-selected>
          <optgroup label="November">
      <option value="PASC045-1" selected>【November】Marblehead</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC006" class="mix cruiser usa premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>Atlanta</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC006-3.png"></div>
                </div>
                <select name="PASC006" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASC006-1">【戰艦少女】Atlanta</option>
            <option value="PASC006-2">【戰艦少女】Atlanta 改</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASC006-3" selected>【碧藍航線】Atlanta</option>
          </optgroup>
    </select>
            </div>
            <div id="PASC507" class="mix cruiser usa premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>Indianapolis</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASC507-1.png"></div>
                </div>
                <select name="PASC507" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASC507-1" selected>【戰艦少女】Indianapolis</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PASC507-2">【鋼鐵少女】Indianapolis</option>
      <option value="PASC507-3">【鋼鐵少女】Portland</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASC507-4">【碧藍航線】Indianapolis</option>
      <option value="PASC507-5">【碧藍航線】Portland</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB506" class="mix battleship usa premium change">
                <p class="ship icon-battleship"><span class="tier">Ⅵ</span>Arizona</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB506-2.png"></div>
                </div>
                <select name="PASB506" data-am-selected>
          <optgroup label="November">
      <option value="PASB506-1">【November】Arizona</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PASB506-2" selected>【碧藍航線】Arizona</option>
          </optgroup>
    </select>
            </div>
            <div id="PASB509" class="mix battleship usa premium change">
                <p class="ship icon-battleship"><span class="tier">Ⅸ</span>Missouri</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PASB509-1.png"></div>
                </div>
                <select name="PASB509" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PASB509-1" selected>【戰艦少女】Missouri</option>
          </optgroup>
    </select>
            </div>
            <!--蘇聯-->
            <div id="PRSC105" class="mix destroyer ussr change">
                <p class="ship icon-destroyer"><span class="tier">Ⅴ</span>Kirov</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PRSC105-2.png"></div>
                </div>
                <select name="PRSC105" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PRSC105-1">【戰艦少女】Kirov</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PRSC105-2" selected>【鋼鐵少女】Kirov</option>
      <option value="PRSC105-3">【鋼鐵少女】Kirov 泳裝Ver.</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PRSC105-4">【Victory Belles】Kirov</option>
          </optgroup>
    </select>
            </div>
            <div id="PRSD108" class="mix cruiser ussr">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>Tashkent</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PRSD108-1.png"></div>
                </div>
                <select name="PRSD108" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PRSD108-1" selected>【戰艦少女】Tashkent</option>
          </optgroup>
    </select>
            </div>
            <!--金船-->
            <div id="PRSC001" class="mix cruiser ussr premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅲ</span>Aurora</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PRSC001-4.png"></div>
                </div>
                <select name="PRSC001" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PRSC001-1">【戰艦少女】Aurora</option>
      <option value="PRSC001-2">【戰艦少女】Aurora</option>
      <option value="PRSC001-3">【戰艦少女】Aurora 緋衣金帶Ver.</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PRSC001-4" selected>【鋼鐵少女】Aurora</option>
          </optgroup>
    </select>
            </div>
            <!--德國-->
            <div id="PGSC104" class="mix cruiser germany change">
                <p class="ship icon-cruiser"><span class="tier">Ⅳ</span>Karlsruhe</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC104-2.png"></div>
                </div>
                <select name="PGSC104" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC104-1">【戰艦少女】Karlsruhe</option>
      <option value="PGSC104-2" selected>【戰艦少女】Karlsruhe 改</option>
      <option value="PGSC104-3">【鋼鐵少女】Karlsruhe</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PGSC104-4">【碧藍航線】Karlsruhe</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC105" class="mix cruiser germany change">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Königsberg</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC105-2.png"></div>
                </div>
                <select name="PGSC105" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC105-1">【戰艦少女】Königsberg</option>
      <option value="PGSC105-2" selected>【戰艦少女】Königsberg 改</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSC105-3">【鋼鐵少女】Königsberg</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PGSC105-4">【碧藍航線】Königsberg</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC106" class="mix cruiser germany change">
                <p class="ship icon-cruiser"><span class="tier">Ⅵ</span>Nürnberg</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC106-2.png"></div>
                </div>
                <select name="PGSC106" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC106-1">【戰艦少女】Leipzig</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PGSC106-2" selected>【Victory Belles】Nürnberg</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC107" class="mix cruiser germany change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>Yorck</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC107-1.png"></div>
                </div>
                <select name="PGSC107" data-am-selected>
          <optgroup label="碧藍航線">
      <option value="PGSC107-1" selected>【碧藍航線】Yorck</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC108" class="mix cruiser germany change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>Hipper</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC108-3.png"></div>
                </div>
                <select name="PGSC108" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC108-1">【戰艦少女】Hipper</option>
      <option value="PGSC108-2">【戰艦少女】Hipper 改</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSC108-3" selected>【鋼鐵少女】Hipper</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSD106" class="mix destroyer germany change">
                <p class="ship icon-destroyer"><span class="tier">Ⅵ</span>Ernst Gaede</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSD106-1.png"></div>
                </div>
                <select name="PGSD106" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PGSD106-1" selected>【艦隊收藏】Z3 zwei</option>
      <option value="PGSD106-2">【艦隊收藏】Z3 夏季限定(2016)Ver.</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSD107" class="mix destroyer germany change">
                <p class="ship icon-destroyer"><span class="tier">Ⅶ</span>Leberecht Maass</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSD107-4.png"></div>
                </div>
                <select name="PGSD107" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PGSD107-1">【艦隊收藏】Z1 zwei</option>
      <option value="PGSD107-2">【艦隊收藏】Z1 秋季限定Ver.</option>
          </optgroup>
          <optgroup label="戰艦少女">
      <option value="PGSD107-3">【戰艦少女】Z1</option>
      <option value="PGSD107-4" selected>【戰艦少女】Z1 改</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PGSD107-5">【碧藍航線】Z1</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSD108" class="mix destroyer germany change">
                <p class="ship icon-destroyer"><span class="tier">Ⅷ</span>Z23</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSD108-1.png"></div>
                </div>
                <select name="PGSD108" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSD108-1" selected>【戰艦少女】Z24</option>
      <option value="PGSD108-2">【戰艦少女】Z28</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSB107" class="mix battleship germany change">
                <p class="ship icon-battleship"><span class="tier">Ⅶ</span>Gneisenau</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSB107-1.png"></div>
                </div>
                <select name="PGSB107" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSB107-1" selected>【戰艦少女】Gneisenau</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSB107-2">【鋼鐵少女】Gneisenau</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSB108" class="mix battleship germany change">
                <p class="ship icon-battleship"><span class="tier">Ⅷ</span>Bismarck</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSB108-8.png"></div>
                </div>
                <select name="PGSB108" data-am-selected>
          <optgroup label="艦隊收藏">
          <option value="PGSB108-1">【艦隊收藏】Bismarck</option>
          <option value="PGSB108-2">【艦隊收藏】Bismarck 改</option>
          <option value="PGSB108-3">【艦隊收藏】Bismarck zwei</option>
      <option value="PGSB108-4">【艦隊收藏】Bismarck drei</option>
          </optgroup>
      <optgroup label="戰艦少女">
      <option value="PGSB108-5">【戰艦少女】Bismarck</option>
      <option value="PGSB108-6">【戰艦少女】Bismarck 改</option>
      </optgroup>
      <optgroup label="鋼鐵少女">
      <option value="PGSB108-7">【鋼鐵少女】Bismarck</option>
      </optgroup>
      <optgroup label="碧藍航線">
      <option value="PGSB108-8" selected>【碧藍航線】Bismarck</option>
      </optgroup>
    </select>
            </div>
            <!--金船-->
            <div id="PGSC508" class="mix cruiser germany premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅵ</span>Prinz Eugen</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC508-2.png"></div>
                </div>
                <select name="PGSC508" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PGSC508-1">【艦隊收藏】Prinz Eugen</option>
      <option value="PGSC508-2" selected>【艦隊收藏】Prinz Eugen 改</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSC508-3">【鋼鐵少女】Prinz Eugen</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PGSC508-4">【碧藍航線】Prinz Eugen</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC506" class="mix cruiser germany premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>Graf Spee</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC506-1.png"></div>
                </div>
                <select name="PGSC506" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC506-1" selected>【戰艦少女】Graf Spee</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSC506-2">【鋼鐵少女】Graf Spee</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PGSC506-3">【Victory Belles】Graf Spee</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSC502" class="mix cruiser germany premium change">
                <p class="ship icon-cruiser"><span class="tier">Ⅱ</span>Emden</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSC502-1.png"></div>
                </div>
                <select name="PGSC502" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSC502-1" selected>【戰艦少女】Emden</option>
      <option value="PGSC502-2">【戰艦少女】Emden 溫馨情人Ver.</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSB002" class="mix battleship germany premium change">
                <p class="ship icon-battleship"><span class="tier">Ⅷ</span>Tirpitz</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSB002-2.png"></div>
                </div>
                <select name="PGSB002" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSB002-1">【戰艦少女】Tirpitz</option>
      <option value="PGSB002-2" selected>【戰艦少女】Tirpitz 改</option>
      <option value="PGSB002-3">【戰艦少女】Tirpitz 兒童節Ver.</option>
          </optgroup>
    </select>
            </div>
            <div id="PGSB507" class="mix battleship germany premium change">
                <p class="ship icon-battleship"><span class="tier">Ⅶ</span>Scharnhorst</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PGSB507-3.png"></div>
                </div>
                <select name="PGSB507" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PGSB507-1">【戰艦少女】Scharnhorst</option>
      <option value="PGSB507-2">【戰艦少女】Scharnhorst 我到河北省來Ver.</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PGSB507-3" selected>【鋼鐵少女】Scharnhorst</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PGSB507-4">【Victory Belles】Scharnhorst</option>
          </optgroup>
    </select>
            </div>
            <!--英國-->
            <div id="PBSC105" class="mix cruiser uk">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Emerald</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PBSC105-1.png"></div>
                </div>
                <select name="PBSC105" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PBSC105-1" selected>【戰艦少女】Emerald</option>
          </optgroup>
    </select>
            </div>
            <div id="PBSC106" class="mix cruiser uk">
                <p class="ship icon-cruiser"><span class="tier">Ⅴ</span>Leander</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PBSC106-1.png"></div>
                </div>
                <select name="PBSC106" data-am-selected>
          <optgroup label="碧藍航線">
      <option value="PBSC106-1" selected>【碧藍航線】Leander</option>
          </optgroup>
    </select>
            </div>
            <div id="PBSC507" class="mix cruiser uk change">
                <p class="ship icon-cruiser"><span class="tier">Ⅶ</span>Belfast</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PBSC507-1.png"></div>
                </div>
                <select name="PBSC507" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PBSC507-1" selected>【戰艦少女】Belfast</option>
          </optgroup>
          <optgroup label="Victory Belles">
      <option value="PBSC507-2">【Victory Belles】Belfast</option>
          </optgroup>
    </select>
            </div>
            <div id="PBSC108" class="mix cruiser uk">
                <p class="ship icon-cruiser"><span class="tier">Ⅷ</span>Edinburgh</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PBSC108-1.png"></div>
                </div>
                <select name="PBSC108" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PBSC108-1" selected>【戰艦少女】Edinburgh</option>
          </optgroup>
    </select>
            </div>
            <!--金船-->
            <div id="PBSB002" class="mix battleship uk premium change">
                <p class="ship icon-battleship"><span class="tier">Ⅵ</span>Warspite</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PBSB002-5.png"></div>
                </div>
                <select name="PBSB002" data-am-selected>
          <optgroup label="艦隊收藏">
      <option value="PBSB002-3">【艦隊收藏】Warspite</option>
      </optgroup>
          <optgroup label="戰艦少女">
      <option value="PBSB002-1">【戰艦少女】Warspite</option>
      <option value="PBSB002-4">【戰艦少女】Queen Elizabeth</option>
          </optgroup>
          <optgroup label="鋼鐵少女">
      <option value="PBSB002-2">【鋼鐵少女】Warspite</option>
          </optgroup>
          <optgroup label="碧藍航線">
      <option value="PBSB002-5" selected>【碧藍航線】Warspite</option>
      <option value="PBSB002-6">【碧藍航線】Queen Elizabeth</option>
          </optgroup>
    </select>
            </div>
            <!--泛亞-->
            <div id="PZSD506" class="mix destroyer pan_asia premium">
                <p class="ship icon-destroyer"><span class="tier">Ⅵ</span>鞍山</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PZSD506-1.png"></div>
                </div>
                <select name="PZSD506" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PZSD506-1" selected>【鋼鐵少女】鞍山</option>
          </optgroup>
    </select>
            </div>
            <div id="PZSD508" class="mix destroyer pan_asia premium">
                <p class="ship icon-destroyer"><span class="tier">Ⅷ</span>洛陽</p>
                <div class="img_container">
                    <div class="addon"><img src="images/ship_previews_web/PZSD508-1.png"></div>
                </div>
                <select name="PZSD508" data-am-selected>
          <optgroup label="戰艦少女">
      <option value="PZSD508-1" selected>【鋼鐵少女】洛陽</option>
          </optgroup>
    </select>
            </div>
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