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

            <ul class="am-nav am-navbar-nav am-navbar-right">
                <li class="inform"><i class="am-icon-bell-o" aria-hidden="true"></i></li>
                <li class="hidden-xs am-hide-sm-only">
                    <form role="search" class="app-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><img src="assets/img/search.png"></a>
                    </form>
                </li>
            </ul>
        </div>
    </header>
    <!-- end page -->
		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="am-g">
					<div class="am-u-md-12" >
						<!-- 折线图堆叠 -->
						<div class="card-box">
							<div  id="daily" style="width: 100%;height: 300px;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end right Content here -->