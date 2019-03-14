<!-- Navbar L1 -->
	<nav class="navbar navbar-expand-lg navbar-dark bg_color-main3 text-size-14" style="padding: 5px; border-bottom: 0px solid #FFF;">
  	  <div class="container">
		  <a class="navbar-brand" href="#"><img src="<?=$level?>images/logo_icon.png" height="40px"></a>
		  <button class="navbar-toggler text_color-W1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link link_main2" href="<?=$level?>admin/index.php">หน้าแรก<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link link_main2" href="<?=$level;?>admin/accout/register_account.php">เข้าร่วมคลาส</a>
			  </li>
			</ul>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-android-person text_color-W1 link_main2">
					<a class="link_main2" href="#"><?=$_SESSION['Username']?></a></span>
				</li>
				<li class="nav-item" style="margin-left: 20px;">
					<span class="ion-ionic text_color-W1 link_main2">
					<a class="link_main2" href="<?=$level;?>admin/accout/server-logout.php">ออกจากระบบ</a></span>
				</li>
			</ul>
		  </div>
		</div>
	</nav><!-- END navbar L1 -->