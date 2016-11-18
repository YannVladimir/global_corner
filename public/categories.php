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
    <title>250 Trade | Buy</title>
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
    <link rel="shortcut icon" href="assets/images/ico/icon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
     .sizingimagesmax{
        height: 190px;

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
					<div class="col-sm-7">
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
                <li><a href="services.php" class="fon">Services</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="active fon">Buy</a></li>
                <li class="dropdown"><a href="#">Odering<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu"> 
                        <li><a href="order.php" class="fon">Make order</a></li>
                        <li><a href="orders.php" class="fon">View orders</a></li> 
                    </ul>
                </li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
                            </ul>
                        </div>
                    </div>
                    <?php
                      include('search.php');
                    ?>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
	
	
	<section>
		<div class="container">
			<div class="row">
        <div class="col-sm-10 padding-right">
                    <br>
                    
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $cats = "SELECT * from subcategories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==1)
                                    {
                                         echo "<li class='active'><a href='#{$row['cat_id']}' data-toggle='tab'>{$row['cat_name']}</a></li>";
                                    }
                                    else
                                    {
                                         echo"<li><a href='#{$row['cat_id']}' data-toggle='tab'>{$row['cat_name']}</a></li>";
                                    }
                                   
                                } 
                                echo "</ul>
                                        </div>
                                        <div class='tab-content'> ";
                                $res1 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res1))
                                {
                                    if($row['cat_id']==1)
                                    {
                                         echo "<div class='tab-pane fade active in' id='{$row['cat_id']}' >";
                                    }
                                }
                                
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['refcat_id']==1)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                
                                    }
                                } 
                                echo "</div>";
                                $res2 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res2))
                                {
                                    if($row['cat_id']==2)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                                $res3 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res3))
                                {
                                    if($row['refcat_id']==2)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                                echo "</div>";
                                $res4 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res4))
                                {
                                    if($row['cat_id']==3)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res5 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res5))
                                {
                                    if($row['refcat_id']==3)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                              echo "</div>";
                                $res6 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res6))
                                {
                                    if($row['cat_id']==4)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res7 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res7))
                                {
                                    if($row['refcat_id']==4)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                              echo "</div>";
                                $res8 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res8))
                                {
                                    if($row['cat_id']==5)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                }
                                $res9 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res9))
                                {
                                    if($row['refcat_id']==5)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                              echo "</div>";
                                $res10 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res10))
                                {
                                    if($row['cat_id']==6)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                              
                                $res11 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res11))
                                {
                                    if($row['refcat_id']==6)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                              echo "</div>";
                                $res12 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res12))
                                {
                                    if($row['cat_id']==7)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res13 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res13))
                                {
                                    if($row['refcat_id']==7)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                } 
                              echo "</div>";
                                $res14 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res14))
                                {
                                    if($row['cat_id']==8)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                              
                                $res15 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res15))
                                {
                                    if($row['refcat_id']==8)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                <h4>{$row['subcat_name']}</h4>
                                                <a href='sub-category.php?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                }
                                echo "</div>"; 
         ?>
                          
                    </div><!--/category-tab-->
                
               
				
				
			  
			</div>
                  <div class="col-sm-3"></div>
        <div class="col-sm-6 padding-right">
            <div class="contact-form align-center">
              <br><br>
              <h2 class="title text-center">Or make your order</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  <br>
                  <div id="electronics">
                    <form action="ordering.php" id="" class="upload-form row" name="upload-form" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                             <input type="text" name="izina" class="form-control" required="required" placeholder="Oreder Title">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <select class="form-control" name="subcategory" required="required">
                                 <option value="">Select order-category</option>
                                 <?php 
                                    $query = "SELECT * FROM categories ";
                                    $res = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                       echo "<option value='{$row['cat_id']}'>{$row['cat_name']}</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Description of your order, less than 1500 characters"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" name="location" class="form-control" required="required" placeholder="Location">
                        </div>
                           <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                  </div>
            </div>
          </div>
                <div class="col-sm-3 padding-right"><!--for advertisement--></div> 
    </div>
		</div>
	</section>
	<br><br><br><br><br><br>
	<?php  
      require('footer.php');    
    ?>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/yann.min.js"></script>
	<script src="assets/js/jquery.scrollUp.min.js"></script>
	<script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>
