      <!-- Begin page -->
    <header class="am-topbar am-topbar-fixed-top">
        <div class="am-topbar-left am-hide-sm-only">
        <a href="./" class="logo">TechTreeMoe</a>
        </div>

        <div class="contain">
            <ul class="am-nav am-navbar-nav am-navbar-left">

                <li>
                    <h4 class="page-title"><?php echo $title; ?></h4>
                </li>
            </ul>
        </div>
    </header>
    <!-- end page -->
        <div class="content-page">
            <!-- Start content -->
            <?php
            $json = file_get_contents('./database/records.json');
            $rdata = json_decode($json);
            $today = date("Ymd",time());
            $cmonth = date("Ym",time());
            $daily = ($rdata->daily->$today < 1) ? 0 : $rdata->daily->$today ;
            $monthly = ($rdata->monthly->$cmonth < 1) ? 0 : $rdata->monthly->$cmonth ;
            ?>
            <div class="content">
                <div class="am-g">
                    <div class="am-u-md-4">
                        <div class="card-box">
                        <span class="text-muted am-fr am-margin-top-xs"><?php echo date("Y年m月d日",time()); ?></span><h4 class="header-title">本日下載量</h4>
                            <div class="widget-chart-1">
                                    <h2 style="text-align:center;font-size:40px;"> <?php echo $daily."次"; ?> </h2>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="am-u-md-4">
                        <div class="card-box">
                        <span class="text-muted am-fr am-margin-top-xs"><?php echo date("Y年m月",time()); ?></span><h4 class="header-title">本月下載量</h4>
                            <div class="widget-chart-1">
                                    <h2 style="text-align:center;font-size:40px;"> <?php echo $monthly."次"; ?> </h2>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                    <div class="am-u-md-4">
                        <div class="card-box">
                        <span class="text-muted am-fr am-margin-top-xs">2017年09月04日至今</span><h4 class="header-title">總下載量</h4>
                            <div class="widget-chart-1">
                                    <h2 style="text-align:center;font-size:40px;"> <?php echo $rdata->overtime."次"; ?> </h2>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
                <div class="am-g">
                    <div class="am-u-md-12">
                        <div class="card-box">
                            <h4 class="header-title">總體萌化進度</h4>
                            
                            <?php
$dList = scandir('../images/ship_previews_origin');
$dList = array_diff($dList, array('.', '..','.DS_Store'));

$dbList = scandir('./database/ships/'); 
$dbList = array_diff($dbList, array('.', '..','.DS_Store'));

$nExist = [];
$allExist = 0;
$allShips = 0;
foreach ($dbList as $dbShip) {
    $exist = 0;
    $nAllShips=0;
  $nation = substr($dbShip,0,strlen($dbShip)-5);

  $json = file_get_contents("./database/ships/$dbShip");
  $sdata = json_decode($json);
  foreach ($sdata->$nation as $id => $value) {
    $allShips++;
    $nAllShips++;
    if (in_array(strtoupper($id).'-0.png',$dList)) {
        $exist++;
        $allExist ++;
    }
  }
  $nExist[$nation]=[$exist,$nAllShips];
}
$MainProgress = round($allExist/$allShips*100);
echo "<div class='am-progress'><div class='am-progress-bar am-progress-bar-secondary' style='width:$MainProgress%'>$MainProgress%</div></div>";

$jfile = "database/complete.json";
$complete = json_decode(file_get_contents($jfile),TRUE);
$complete = '';
file_put_contents($jfile, json_encode($nExist));

?>             

                        </div>
                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-md-12">
                        <div class="card-box">
                        <h4 class="header-title">各國萌化進度</h4>
                        <div  id="nationComplete" style="width: 100%;height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>