<?php
session_start();
include 'database/session.php';
$page = $_SERVER['QUERY_STRING'];
$open_pages = array('ships');
switch ($page) {
    case 'ships':
        $title = "艦船列表";
        break;
    default:
        $title = "資料庫";
}
?>
    <!DOCTYPE html>
    <html lang="zh-TW">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php echo $title; ?>
        </title>
        <link rel="stylesheet" href="assets/css/amazeui.css" />
        <link rel="stylesheet" href="assets/css/core.css" />
        <link rel="stylesheet" href="assets/css/menu.css" />
        <link rel="stylesheet" href="assets/css/admin.css" />
    </head>

    <body>
        <div class="admin">
            <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
                <div class="am-offcanvas-bar admin-offcanvas-bar">
                    <div class="user-box am-hide-sm-only">
                        <div class="user-img">
                            <img src="assets/img/avatar.png" alt="user-img" title="Makino Haruka" class="img-circle img-thumbnail img-responsive">
                        </div>
                        <h5>Makino Haruka</h5>
                    </div>
                    <ul class="am-list admin-sidebar-list">
                        <li>
                            <a href="./">
                                <span class="am-icon-home"></span> 首页</a>
                        </li>
                        <li>
                            <a href="./?ships">
                                <span class="am-icon-table"></span> 艦船列表</a>
                        </li>
                        <li>
                            <a href="php/copy_assistant.php" target="_blank">
                                <span class="am-icon-terminal"></span> 作業複製輔助</a>
                        </li>
                        <li>
                            <a href="php/origin.php" target="_blank">
                                <span class="am-icon-terminal"></span> 原圖複製輔助</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
if (in_array($page, $open_pages)) {
    include "php/$page.php";
} else if ($page == '') {
    include 'php/summary.php';
}
?>
        </div>
        </div>

        <a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </a>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/amazeui/2.7.2/js/amazeui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.2.2/mixitup.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
    </body>

    </html>
