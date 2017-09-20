<div id="ships" class="content-page">
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

    <ul class="am-nav am-navbar-nav am-navbar-right">
      <li class="hidden-xs am-hide-sm-only">
        <form role="search" class="app-search">
          <input type="text" placeholder="Search..." class="form-control search">
          <a href=""><img src="assets/img/search.png"></a>
        </form>
      </li>
    </ul>
  </div>
</header>
			<div class="content">
				<div class="card-box">
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-title"><a class="sort" data-sort="name">艦名</a></th>
                <th class="table-type"><a class="sort" data-sort="tier">階級</a></th>
                <th class="table-author am-hide-sm-only"><a class="sort" data-sort="id">ID</a></th>
                <th class="table-date am-hide-sm-only"><a class="sort" data-sort="type">艦種</a></th>
                <th class="table-set"><a class="sort" data-sort="nation">國籍</a></th>
              </tr>
              </thead>
              <tbody class="list">


              <?php
            $dir    = './database/ships/';
            $allFiles = scandir($dir); 
            $files = array_diff($allFiles, array('.', '..','.DS_Store'));
            
            $i =0;
            foreach ($files as $file) {
              $nation = substr($file,0,strlen($file)-5);

              $json = file_get_contents("./database/ships/$file");
              $sdata = json_decode($json);
              $ncount = count((array)$sdata->$nation);
              foreach ($sdata->$nation as $id => $value) {
                $i++;
                echo "<tr>
                <td class='name'>$value->name</td>
                <td class='tier'>$value->tier</td>
                <td class='id'>$id</td>
                <td class='type'>$value->type</td>
                <td class='nation'>$nation</td>
                ";
              }
              echo "</tr>";
            }
              ?>
              </tbody>
            </table>
            <?php
              echo "共 $i 艘戰艦";
              ?>

          資料由<a href="https://gamemodels3d.com/games/worldofwarships/">GameModels3D</a>提供
          </form>
        </div>
      </div>
					</div>
				</div>
			</div>
    </div>
