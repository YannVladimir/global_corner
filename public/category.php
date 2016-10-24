<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Buy | Get It</title>
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
      .sizingimages{
        height: 200px;
      }
      .sizingimagesmax{
        height: 190px;
      }
      .slidersizing{
        height:320px;
      }
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
							<ul class="nav navbar-nav ">
							 
                <li><a href="home.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="active fon">Buy</a></li>
                <li><a href="orders.php" class="fon">Orders</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box">
                          <form action='search_results.php' method='GET'>
                            <input type="text" name='k'  required="required" class="searchtext col-sm-10" placeholder="Search"/>
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
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php 
            $id = $_GET['id'];
                            $a = 0;
                            $query = "SELECT * FROM items where refcat_id = '{$id}' order by uploaded_date desc";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                              if($row['is_accepted'] == 1){
                                if ($row['refcat_id']!=9 && $row['refcat_id']!=10 )
                              echo "<div class='col-sm-3'>
							<div class='product-image-wrapper'>
								<div class='single-products'>
									<div class='productinfo text-center'>
                      <div class='sizingimages'>
										<img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
										</div>
										<h2>{$row['price']} Rwf</h2>
										<p>{$row['name']}</p>
										<a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
									</div>
									<div class='product-overlay'>
										<div class='overlay-content'>
											<h2>{$row['price']} Rwf</h2>
									     	<p>{$row['name']}</p>
										    <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
								        </div>
									</div>
								</div>
								<div class='choose'>
									<ul class='nav nav-pills nav-justified'>
										<li><a href='#'>{$row['place_name']}</a></li>
										<li><a href='#'>{$row['uploaded_date']}</a></li>
									</ul>
								</div>
							</div>
						</div>";}
            elseif ($row['refcat_id']==10) {
              echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h1 class='panel-title'><strong> Job offer </strong></h1>
                    </div>
                    <ul class='list-group'>";
            
                           echo"<li class='list-group-item'><strong>Company name: </strong>{$row['company_name']}</li>
                        <li class='list-group-item'><strong>Job Position: </strong>{$row['job_position']}</li>
                        <li class='list-group-item'><strong>Category: </strong>{$row['subcat_name']}</li>
                        <li class='list-group-item'><strong>Published on: </strong>{$row['uploaded_date']}</li>
                        <li class='list-group-item'><strong>Apply before: </strong>{$row['deadline']}</li>";
                        echo"<li class='list-group-item'>
                          <form action='job-details.php' method='GET'>
                            <input type='text' class='hidden' name='id' value='{$row['post_id']}'>
                             <button type='submit' class='btn btn-default bton'>View Details</button>
                          </form>
                        </li></ul>";
                        
                        echo"</div>
                            </div>  
                            </div>
                              </div>
                                </div>";
            }
            else
            {
                $a = 0;
            }
                              $a = $a+1;
                            }
                            if($a==0)
                            {
                            	echo "<h2>No posts found in this category</h2>";
                            } 
                               
                        ?>

						
					</div>
                  </div>
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                                            $c = 3;
                                            $query = "SELECT * FROM categories ";
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
                    $queryy = "SELECT * FROM amacategories ";
                    $re = mysqli_query($con,$queryy);
                    while($ro = mysqli_fetch_assoc($re))
                                              {
                                              if($ro['refcat_id']==$c)
                                              {
                                                   echo "<li><a href='sub-category.php?id={$ro['subcat_id']}'>*   {$ro['subcat_name']} </a></li>";
                                                   
                                              }
                                              }
                                              
                                            }
                                            
                                            echo "<li><a href='category.php?id={$c}'>*   All in {$a} </a></li></ul>
                  </div>
                </div>
              </div>";
              $c = $c+1;
                                            
                                            } 
                                        ?>
							
						</div><!--/category-productsr-->

						<!--/shipping-->
						
					</div>
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
  
</body>
</html>
