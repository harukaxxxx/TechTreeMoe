
<!-- Begin page -->
<header class="am-topbar am-topbar-fixed-top">
    <div class="am-topbar-left am-hide-sm-only">
        <a href="./" class="logo">TechTreeMoe</a>
    </div>

    <div class="contain">
        <ul class="am-nav am-navbar-nav am-navbar-left">

            <li>
                <h4 class="page-title">
                    <?php echo $title; ?>
                </h4>
            </li>
        </ul>
        <ul class="am-nav am-navbar-nav am-navbar-right">
            <li class="hidden-xs am-hide-sm-only">
                <div class="am-btn-group am-btn-group-sm m-t-10">
                    <button type="button" class="am-btn am-btn-primary am-round" onclick="$('.am-panel-collapse').collapse('open');">全部展開</button>
                    <button type="button" class="am-btn am-btn-primary am-round" onclick="$('.am-panel-collapse').collapse('close');">全部收起</button>
                </div>
            </li>
        </ul>


    </div>
</header>
<!-- end page -->
<div class="content-page container">
    <div class="am-btn-group am-btn-group-sm m-b-10">
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter="all">全顯示</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".japan">日本</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".usa">美國</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".ussr">蘇聯</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".germany">德國</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".uk">英國</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".pan_asia">泛亞</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".france">法國</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".italia">義大利</button>
        <button type="button" class="am-btn am-btn-primary am-radius" data-filter=".commonwealth">聯邦</button>
    </div>
    <!-- Start content -->
    <div class="content">

        <div class="am-g">
        <div class='am-u-md-12'>
<?php
$allFiles = scandir('../assets/database/shipJSON');
$files = array_diff($allFiles, array('.', '..', '.DS_Store'));
foreach ($files as $file) {
    $simpleNation = substr($file, 1, 1);
    $json = file_get_contents("../assets/database/shipJSON/$file");
    $data = json_decode($json);
    $collapseData = "'{parent: \"#$data->id\", target: \"#col$data->id\"}'";

    echo "
                            <div class='card-box m-b-10 mix $data->nation $data->type'>
                                <div class='am-panel-group am-margin-bottom-0' id='$data->id'>


                                    <div class='am-panel am-panel-default'>
                                        <div class='am-panel-hd'>
                                        <h4 class='am-panel-title icon-$data->type' data-am-collapse=$collapseData><span class='tier'>$data->tier</span>$data->name</h4>
                                        </div>
                                        <div id='col$data->id' class='am-panel-collapse am-collapse'>
                                            <div class='am-panel-bd'>
                                                <div class='am-input-group am-input-group-sm m-b-5'>
                                                    <span class='am-input-group-label'><i class='am-icon-user am-icon-fw'></i>艦名</span>
                                                    <input type='text' class='am-form-field' name='name' value='$data->name'>
                                                    <span class='am-input-group-label'><i class='am-icon-user am-icon-fw'></i>ID</span>
                                                    <input type='text' class='am-form-field' name='id' value='$data->id'>
                                                    <span class='am-input-group-label'><i class='am-icon-user am-icon-fw'></i>艦種</span>
                                                    <input type='text' class='am-form-field' name='type' value='$data->type'>
                                                    <span class='am-input-group-label'><i class='am-icon-user am-icon-fw'></i>國籍</span>
                                                    <input type='text' class='am-form-field' name='nation' value='$data->nation'>
                                                </div>

                                                <form class='am-form'>
                                                <div class='am-form-group m-b-5'>
                                                <label class='am-form-label'>階級：</label>
                                                    ";
    $tiers = ['I', 'Ⅱ', 'Ⅲ', 'Ⅳ', 'Ⅴ', 'Ⅵ', 'Ⅶ', 'Ⅷ', 'Ⅸ', 'Ⅹ'];
    foreach ($tiers as $tier) {
        if ($data->tier == $tier) {
            echo "<label class='am-radio-inline'><input type='radio' name='tier' checked>$tier</label>";
        } else {
            echo "<label class='am-radio-inline'><input type='radio' name='tier'>$tier</label>";
        }
    }
    $change = ($data->change) ? ' checked' : '';
    $premium = ($data->premium) ? ' checked' : '';
    $arp = ($data->arp) ? ' checked' : '';
    echo "
                                                    <label class='am-form-label m-l-15'>｜　設定：</label>
                                                        <label class='am-checkbox-inline'><input type='checkbox' name='change'$change> change</label>
                                                        <label class='am-checkbox-inline'><input type='checkbox' name='premium'$premium> premium</label>
                                                        <label class='am-checkbox-inline'><input type='checkbox' name='arp'$arp> arp</label>
                                                    </div>
                                                    ";
    $bandArray = ['艦隊收藏', '戰艦少女', '鋼鐵少女', '碧藍航線', 'November', '蒼藍鋼鐵戰艦', 'Victory Belles', '高校艦隊', '最終戰艦', '同人作品', '萌萌模式'];
    echo $popover;
    foreach ($bandArray as $band) {
        echo "<div class='am-form-group m-b-5' name='$band'>
                                                        <label name='band' band='$band'>$band</label>
                                                        <a class='am-badge am-badge-secondary am-round' onclick='add($data->id," . '"' . $band . '"' . ");'>+</a>";
        if (isset($data->$band)) {
            foreach ($data->$band as $key => $option) {
                if ($band == '同人作品') {
                    $urlAutor = $option[1];
                    $urlWorks = $option[3];
                    $optionAutor = $option[0];
                    $optionWorks = $option[2];
                    $optionInput = "
                                                                <input type='text' class='am-form-field' value='$optionAutor'>
                                                                <input type='text' class='am-form-field' value='$urlAutor'>
                                                                <input type='text' class='am-form-field' value='$optionWorks'>
                                                                <input type='text' class='am-form-field' value='$urlWorks'>

                                                                <span class='am-input-group-label'>";
                } else {
                    $optionInput = "<input type='text' class='am-form-field' value='$option'>
                                                                <span class='am-input-group-btn'>";
                }
                $default = ($data->default == $key) ? ' checked' : '';
                $skey = str_pad($key, 2, '0', STR_PAD_LEFT);
                echo "
                                                            <div class='am-input-group'>
                                                            <span class='am-input-group-label'>
                                                              <input type='radio' value='$key' name='default'$default>
                                                              $skey
                                                            </span>
                                                            $optionInput
                                                                <button class='am-btn am-btn-default' type='button' data-am-modal=\"{target: '#modal_$data->id-$key',closeViaDimmer: 1}\">預覽</button>
                                                            </span>

                                                            </div>
                                                            <div class='am-modal am-modal-alert' tabindex='-1' id='modal_$data->id-$key'>
                                                                <div class='am-modal-dialog'>
                                                                    <div class='am-modal-hd'>$option</div>
                                                                    <div class='am-modal-bd'>
                                                                        <img class='am-img-thumbnail' src='../assets/images/ship_previews_web/$data->id-$key.png'>
                                                                    </div>
                                                                    <div class='am-modal-footer'>
                                                                        <span class='am-modal-btn'>關閉</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            ";
            }
        }
        echo "</div>";
    }
    echo "
                                                </form>
                                                <button type='button' class='am-btn am-btn-primary m-t-5' onclick='submit($data->id);'>驗證</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class='am-modal-actions' id='compare_$data->id'>


                                    <div class='am-modal-actions-group compare'>


                                    <div class='am-modal-hd'>資料驗證確認</div>
                                    <hr class='am-margin-vertical-0'>
                                    <div class='am-modal-bd'>
                                        <div class='am-g'>
                                            <div class='am-u-sm-6'>
                                                <pre id='json_original_$data->id' class='am-pre-scrollable am-text-left'></pre>
                                            </div>
                                            <div class='am-u-sm-6'>
                                                <pre id='json_edited_$data->id' class='am-pre-scrollable am-text-left'></pre>
                                            </div>
                                        </div>
                                    </div>



                                    </div>
                                    <div class='am-modal-actions-group'>
                                        <button class='am-btn am-btn-secondary am-btn-block' data-am-modal-close onclick='confirm($data->id);'>確認</button>
                                        <button class='am-btn am-btn-warning am-btn-block' data-am-modal-close>取消</button>
                                    </div>



                                </div>

                        ";

}
?>
</div>

            <!-- col end -->
        </div>
    </div>
</div>
