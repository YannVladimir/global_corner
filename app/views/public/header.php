<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row"> 
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +919056148414</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> getit@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="logo pull-left">
							<a href="<?php echo BASEURL; ?>home"><img src="<?php echo BASEURL."../assets/images/home/logos.png"; ?>" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle country" data-toggle="dropdown">
									Select Your Language
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">English</a></li>
									<li><a href="">Kinyarwanda</a></li>
									<li><a href="">Kiswahili</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<?php
                   if($_SESSION)
                   {
                       echo "
                       <div class='col-sm-5'>
						<div class='shop-menu pull-right'>
							<ul class='nav navbar-nav'>
								<li><a href='acount'><i class='fa fa-user'></i> My Account</a></li>
								<li><a href='/Eshopper/public/logout'><i class='fa fa-lock'></i> Logout</a></li>
							</ul>
						</div>
					</div>";
                   }
                   else
                   {
                       echo "<div class='col-sm-5'>
						<div class='shop-menu pull-right'>
							<ul class='nav navbar-nav'>
								<li><a></a></li>
								<li><a href='/Eshopper/public/loginpage'><i class='fa fa-lock'></i> Login</a></li>
							</ul>
						</div>
					</div>";
                   }
                 ?>
				</div>
			</div>
		</div><!--/header-middle--> 
		
		