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

            <!-- <ul class="am-nav am-navbar-nav am-navbar-right">
            <div class="am-btn-group am-btn-group-xs">
            <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 清空緩存</button>
          </div>
            </ul> -->
        </div>
    </header>
    <!-- end page -->
<div id="caches" class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="card-box">
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-id"><a class="sort" data-sort="no">NO</a></th>
                <th class="table-title"><a class="sort" data-sort="filename">檔名</a></th>
                <th class="table-author"><a class="sort" data-sort="filecount">檔案數</a></th>
                <th class="table-date"><a class="sort" data-sort="mdate">修改日期</a></th>
                
              </tr>
              </thead>
              <tbody class="list">


              <?php
            $dir    = '../assets/php/cache/';
            $allFiles = scandir($dir); 
            $files = array_diff($allFiles, array('.', '..','.DS_Store'));


              $i =0;
              foreach ($files as $key => $value) {
                $i++;
                
                $file = "../assets/php/cache/$value";
                $za = new ZipArchive();
                $za->open($file);
                $inZip = $za->numFiles/2;
                $Date = date ("Y 年 m 月 d 日 H:i:s", filemtime($file));
                

                echo "<tr>
                <td class='no'>$i</td>
                <td class='filename'><a href='$file'>$value</a></td>
                <td class='filecount'>$inZip</td>
                <td class='mdate'> $Date</td>
              </tr>";
            
              }
              ?>
              </tbody>
            </table>
            <div class="am-cf">
              <?php
              $c = count($files);
              echo "共 $c 個檔案";
              ?>
            </div>
          </form>
        </div>

      </div>
					  <!-- Row end -->	  
					</div>
				</div>
			</div>
    </div>