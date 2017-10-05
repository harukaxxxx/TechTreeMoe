<header class="am-topbar am-topbar-fixed-top">
<div class="am-topbar-left am-hide-sm-only">
<a href="./" class="logo">TechTreeMoe</a>
</div>

    <div class="contain">
        <ul class="am-nav am-navbar-nav am-navbar-left">

            <li>
                <h4 class="page-title">管理員登入</h4>
            </li>
        </ul>
    </div>
</header>
<!-- end page -->

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="am-g">
            <!-- Row start -->



            
	            <div class="login am-center card-box">
	            	<!-- <div class="text-center">
	                    <h4 class="text-uppercase font-bold m-b-0">登入</h4>
	                </div> -->
	                <div class="panel-body m-t-15">
	                	<form class="am-form">
	                		<div class="am-g">
	                			<div class="am-form-group">
                                    使用者名稱：
							      <input type="text" name = "username" class="am-radius" required autofocus>
							    </div>
							
							    <div class="am-form-group m-t-20">
                                    使用者密碼：
							      <input type="password" name = "password" class="am-radius" required>
							    </div>
							    
							    <!-- <div class="am-form-group ">
		                           	<label style="font-weight: normal;color: #999;">
								        <input type="checkbox" class="remeber"> Remember me
								    </label>
                                </div> -->
                                
                                <h4 class = "form-signin-heading"><?php echo $error; ?></h4>
		                        
		                        <div class="am-form-group">
		                        	<button type="submit" name="return" value="<?php echo $page;?>" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">登入</button>
		                        </div>
		                        
		                        <!-- <div class="am-form-group ">
		                        <a href="page-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div> -->
	                		</div>
                        </form>
	                </div>
	            </div>





            <!-- Row end -->
        </div>




    </div>
</div>
</div>
</div>