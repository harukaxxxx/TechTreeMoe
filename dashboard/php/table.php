<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="card-box">
					<!-- Row start -->
					<div class="am-g">
						<div class="am-u-sm-12 am-u-md-6">
				          <div class="am-btn-toolbar">
				            <div class="am-btn-group am-btn-group-xs">
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
				            </div>
				          </div>
				        </div>	
				        
						<div class="am-u-sm-12 am-u-md-3">
				          <div class="am-input-group am-input-group-sm">
				            <input type="text" class="am-form-field">
				          <span class="am-input-group-btn">
				            <button class="am-btn am-btn-default" type="button">搜索</button>
				          </span>
				          </div>
				        </div>
				      </div>
            <!-- Row end -->
            
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">类别</th><th class="table-author am-hide-sm-only">作者</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>


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
                <td><input type='checkbox' /></td>
                <td>$i</td>
                <td><a href='$file'>$value</a></td>
                <td>$inZip</td>
                <td class='am-hide-sm-only'>测试1号</td>
                <td class='am-hide-sm-only'> $Date</td>
                <td>
                  <div class='am-btn-toolbar'>
                    <div class='am-btn-group am-btn-group-xs'>
                      <button class='am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only' onclick='clean('$value');'><span class='am-icon-trash-o'></span> 删除</button>
                    </div>
                  </div>
                </td>
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
    <script>
    function clean(file) {
    $.post('php/clean.php', { 'file': file }, function(data) {
                console.log(data);
            }
          }
    </script>