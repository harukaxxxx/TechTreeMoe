<?php
    session_start();
    include('database/session.php');
    $page = $_SERVER['QUERY_STRING'];
    $open_pages = array( 'ships');
    switch ($page) {
        case 'ships':
            $title = "艦船列表";
            break;
        default:
            $title = "資料庫";
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
                    <li><a href="./?ships"><span class="am-icon-table"></span> 艦船列表</a></li>
                </ul>
            </div>
        </div>
        <?php
        if (in_array($page, $open_pages)) {
            include("php/$page.php");
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

    <a href="admin-offcanvas" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"><i class="fa fa-bars" aria-hidden="true"></i></a>

    <script type="text/javascript" src="assets/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="assets/js/amazeui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script src="../assets/js/mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/echarts.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
</body>

</html>