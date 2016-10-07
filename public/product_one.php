<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Items | Get It</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet">
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
        .sizingimagesmax{
        	padding: 37px;

        }
        .fon{
      	font-size: 20px;
      }
       
    </style>
</head><!--/head-->

<body>
	<?php   
    require('header.php');   
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
								<li><a href="index.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="active fon">Buy</a></li>
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
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                                            
                                            $c = 3;
                                            $query = "SELECT * FROM categories ";
                                            $queryy = "SELECT * FROM amacategories ";
                                            $res = mysqli_query($con,$query);
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                            if($row['cat_id']==$c)
                                            {
                                               echo "<div class='panel panel-default'>
                <div class='panel-heading'>
                  <h4 class='panel-title'>
                  <a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
                      <span class='badge pull-right'><i class='fa fa-plus'></i></span>
                      {$row['cat_name']}
                         </a></h4>
                </div><div id='$c' class='panel-collapse collapse'>
                  <div class='panel-body'>
                    <ul>";$a = $row['cat_name'];
                    $re =  mysqli_query($con,$queryy);
                    while($ro = mysqli_fetch_assoc($re))
                                              {
                                              if($ro['refcat_id']==$c)
                                              {
                                                   echo "<li><a href='certain?id={$ro['subcat_id']}'>*   {$ro['subcat_name']} </a></li>";
                                                   
                                              }
                                              }
                                              
                                            }
                                            $c = $c+1;
                                            echo "<li><a href='certain?id=0'>*   All in {$a} </a></li></ul>
                  </div>
                </div>
              </div>";
                                            
                                            } 
                                        ?>
							
						</div><!--/category-productsr-->
						
						
						<div class="shipping text-center"><!--shipping-->

							<img src="assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
						<?php 
                            $id = $_GET['id'];
                            $query = "SELECT * FROM items where post_id = '{$id}' and is_accepted = 1";
			
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                            	$sub_id = $row['subcat_id']; 
                              echo "<div class='product-details'><!--product-details-->
						<div class='col-sm-6'>
							<div class='view-product'>
										<div class='' id='photo1'>
                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt=''/>
					  </div>
								<h3>Verified</h3>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='product-information'><!--/product-information-->
								<img src='assets/images/product-details/new.jpg' class='newarrival' alt='' />
								<span>
									<span>{$row['name']}</span>
								</span>
								<p>{$row['details']}</p>
								<h2>{$row['price']} Rwf</h2>
								<p>Seller: <b>{$row['seller']}</b></p>
								<p>Place:<b> {$row['place_name']}</b></p>
								<p>Contact number:<b> {$row['contacts']}</b></p>
								<p>Uploaded Date:<b>{$row['uploaded_date']}</b></p>
								<a href=''><img src='assets/images/product-details/share.png' class='share img-responsive'  alt='' /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->";
                            } 
                            echo"<div class='recommended_items'><!--recommended_items-->
						<h2 class='title text-center'>recommended items</h2>
						
						<div id='recommended-item-carousel' class='carousel slide' data-ride='carousel'>
							<div class='carousel-inner'>
								<div class='item active'>"; 
								$queryyy = "SELECT * FROM items where subcat_id = '{$sub_id}' and post_id !='{$id}' and is_accepted = 1 order by post_id desc limit 4";
			
                            $res1 = mysqli_query($con,$queryyy);
                            while($row = mysqli_fetch_assoc($res1))
                            {
                            	{
                            		echo"
                            		<div class='col-sm-3'>
										<div class='product-image-wrapper'>
											<div class='single-products'>
												<div class='productinfo text-center'>
													<img src='assets/images/posts/{$row['main']}' alt='' />
													<h2>{$row['price']}</h2>
													<p>{$row['name']}</p>
										            <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View item</a>
												</div>
											</div>
										</div>
									</div>";
                            	}
               
								
                            }
                               
                        ?>
                    			
						</div>
					</div><!--/recommended_items-->
					
				</div>
						
				
			</div>
		</div>
	</section>
	
	<br><br><br><br>
	<?php  
      require('footer.php');    
    ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/price-range.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-1.9.1.min.js"></script>
   
</body>
</html>