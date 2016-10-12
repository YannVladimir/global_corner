<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My posts | Get It</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
     .fon{
      	font-size: 20px;
      }
    </style>
</head><!--/head-->

<body>
	<?php   
    include('header.php');   
  ?>	

    <div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="home.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box">
                          <form action='search_results.php' method='GET'>
							<input type="text" name='k' class="searchtext col-sm-10" placeholder="Search"/>
							<button type="submit" class="btn btn-default col-sm-2 bton"><i class="fa fa-search"></i></button>
						  </form>
            </div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<!--<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>

		This section is for advetisement
	</section>-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
				</div>
				
				<div class="col-sm-9 padding-right">
						<?php 
                            $id = $_GET['id'];
                            $query = "SELECT * FROM items where post_id = '{$id}' ";
			                $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                            	$sub_id = $row['subcat_id']; 
                              echo "<div class='product-details'><!--product-details-->
						<div class='col-sm-5'>
							<div class='view-product'>
								<div class='sizingimages'>
										<img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
										</div>
							</div>
						</div>
						<div class='col-sm-7'>
							<div class='product-information'><!--/product-information-->
								<p>Post name: <b>{$row['name']}</b></p>
								<p>Category:<b> {$row['subcat_name']}</b></p>
								<p>Details:<b> {$row['details']}</b></p>
								<p>Price:<b> {$row['price']}</b></p>
								<p>Seller: <b>{$row['seller']}</b></p>
								<p>Place:<b> {$row['place_name']}</b></p>
								<p>Contact number:<b> {$row['contacts']}</b></p>
								<p>Uploaded Date:<b>{$row['uploaded_date']}</b></p>
								<a href=''><img src='assets/images/product-details/share.png' class='share img-responsive'  alt='' /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->";
                            } 
                            
					?>
				</div>
						
				
			</div>
		</div>
	</section>
	
	<br><br><br><br>
	<?php  
      include('footer.php');    
    ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/price-range.js"></script>
  <script src="assets/js/main.js"></script>
  
</body>
</html>