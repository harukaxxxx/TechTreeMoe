<?php
    session_start();
    include('database/session.php');
    $page = $_SERVER['QUERY_STRING'];
    $open_pages = array('caches', 'chart', 'ships', 'form');
    $admin_pages = array('database');
    switch ($page) {
        case 'caches':
            $title = "暫存列表";
            break;
        case 'chart':
            $title = "數據圖表";
            break;
        case 'ships':
            $title = "艦船列表";
            break;
        case 'form':
            $title = "表單";
            break;
        case 'database':
            $title = "資料庫";
            break;
        default:
            $title = "總覽";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/amazeui.css" />
    <link rel="stylesheet" href="assets/css/core.css" />
    <link rel="stylesheet" href="assets/css/menu.css" />
    <link rel="stylesheet" href="assets/css/index.css" />
    <link rel="stylesheet" href="assets/css/admin.css" />
    <link rel="stylesheet" href="assets/css/page/typography.css" />
    <link rel="stylesheet" href="assets/css/page/form.css" />
    <link rel="stylesheet" href="assets/css/component.css" />
</head>

<body>
    <div class="admin">
        <div class="admin-sidebar am-offcanvas  am-padding-0" id="admin-offcanvas">
            <div class="am-offcanvas-bar admin-offcanvas-bar">
                <div class="user-box am-hide-sm-only">
                    <?php
                        if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != TRUE){
                            ?>
                            <div class="user-img">
                        <img src="assets/img/anonymous.png" alt="user-img" title="Makino Haruka" class="img-circle img-thumbnail img-responsive">
                    </div>
                    <h5>Anonymous</h5>
                            <?php
                        } else {
                            ?>
                        <div class="user-img">
                        <img src="assets/img/avatar.png" alt="user-img" title="Makino Haruka" class="img-circle img-thumbnail img-responsive">
                    </div>
                    <h5 class="m-b-0">Makino Haruka</h5>
                    <small><a href="./php/logout.php">登出</a></small>
                            <?php
                        }
                    ?>
                    <!-- <ul class="list-inline">
                        <li>
                            <a href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="text-custom">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul> -->
                </div>
                <ul class="am-list admin-sidebar-list">
                    <li><a href="./"><span class="am-icon-home"></span> 首页</a></li>
                    <li class="admin-parent">
                        <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><span class="am-icon-table"></span> 表格 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
                            <li><a href="./?ships">艦船列表</a></li>
                        <li><a href="./?caches">暫存列表</a></li>
                        </ul>
                    </li>
                    <li><a href="./?chart"><span class="am-icon-line-chart"></span> 數據圖表</a></li>
                    <li class="admin-parent">
                        <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><span class="am-icon-file"></span> 表單 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav2">
                            <li><a href="./?form"> 基本表單</a></li>
                        </ul>
                    </li>
                    <li class="admin-parent">
                        <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><span class="am-icon-file"></span> 管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                        <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav3">
                            <li><a href="./?database"> 資料庫 </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <?php
        if (isset($_GET['return'])){
            $return = $_GET['return'];
            if($_GET["username"]==$login_username && $_GET["password"]==$login_password){
                $_SESSION['logged_in'] = TRUE;
                    echo "<script>window.location.replace('./?$return');</script>";
                }else{
                    echo "<script>window.location.replace('./?$return');</script>";
                }
        } else if (in_array($page, $open_pages)) {
            include("php/$page.php");
        } else if(in_array($page, $admin_pages)){
            if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != TRUE){
                include('php/login.php');
            } else {
                include("php/$page.php");
            }
        } else if($page == ''){
            include('php/summary.php');
        } else {
            ?>
            <h2>Page not found</h2>
            <p>The page you requested was not found on this server.</p>
            <?php
        }
        ?>

    </div>
    </div>

    <a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><!--<i class="fa fa-bars" aria-hidden="true"></i>--></a>

    <script type="text/javascript" src="assets/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="assets/js/amazeui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/blockUI.js"></script> -->
    <script type="text/javascript" src="assets/js/echarts.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>

</html>