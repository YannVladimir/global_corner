<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
generateUser();
if(isset($_GET['var']) == "logout")
{
    log_user_out();
}
?>
<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Home</title>
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
      .sizing{
        width:30px;
      }
      .left-image{
       position: absolute;
      }
      .right-image{
       position: absolute;
       z-index: 5;
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
                            <ul class="nav navbar-nav ">
                             
                <li><a href="home.php" class="active fon">Home</a></li>
                <li><a href="services.php" class="fon">Services</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
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
    
    
    <?php  
      require_once('slider.php');    
    ?>
    
    <section>
        <div class="container">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <br><br>
                    
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <h2 class="title text-center">Recomended products</h2><br>
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==1)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}' >Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=1 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";

                                   
                                } 
                                echo "</div>";

                                
//for laptops
?>
<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==2)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=2 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for mobiles
?>
<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==3)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=3 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for elelectronics
?>

<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==8)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=8 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for fashion
?>
<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==6)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=6 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for cars and bikes
?>

<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==5)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=5 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for real estates
?>


<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==4)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=4 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 if ($row['is_auction']==1)
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img src='assets/images/shop/logo.png' style='width:70px' class='newarrival sizing' alt='' />
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['price']} Rwf</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                       else
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
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['contacts']}</h2>
                                                       <p>{$row['place_name']} District</p>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for furnitures
?>

<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==7)
                                    {
                                         echo "<li class='pull-left'><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                         echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='category.php?id={$row['cat_id']}'>Visit Category</a></li>";
                                    }
                                   // else
                                    //{
                                    //     echo"<li><a href='category.php?id={$row['cat_id']}'>{$row['cat_name']}</a></li>";
                                    //}
                                   
                                } 
                                echo "</ul>
                        </div>
                        <div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                                $cats = "SELECT * from items where refcat_id=7 and is_accepted=1 order by post_id desc limit 4";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 echo "<div class='col-sm-3'>
                                         <div class='product-image-wrapper'>
                                             <div class='single-products'>
                                                <div class='productinfo text-center'>
                                                   <div class='sizingimages'>
                                                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                   </div>
                                                   <h2>{$row['contacts']}</h2>
                                                   <p>{$row['name']}</p>
                                                   <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                </div>
                                                <div class='product-overlay' style='opacity:0.9'>
                                                    <div class='overlay-content'>
                                                       <h2>{$row['place_name']}</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";

                                
//for services
?>
</div><!--/category-tab-->
</div> 
</di><!--/row-->
<div class="row">
    <div class="col-sm-12"><br><br><br><h2 class="title text-center">Recomended orders</h2><br>
     <ul class="nav nav-tabs">
  <?php
  echo "<li class='pull-left'><a href='orders.php'>Orders</a></li>";
  echo "<li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='orders.php'>View All</a></li>";
  echo "</ul>";
  ?>
</div>
  <!--<div class='col-sm-2'></div>-->
                <div class='col-sm-12'>
                           
                                <?php 
                              
                
                        echo "<div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                               $query = "SELECT * from vieworders where is_accepted = 1 order by id desc limit 10";
                               $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                 echo " <div class='col-sm-4'>
                        <div class='panel panel-default text-center'>
                            <div class='panel-heading'>
                                <h2 class='panel-title'><strong>{$row['name']} </strong></h2>
                            </div>";
                      echo "<ul class='list-group'>
                               <li class='list-group-item'><strong></strong>{$row['details']}</li>
                               <li class='list-group-item'><strong></strong>{$row['place']}</li>
                               <li class='list-group-item'><strong></strong>{$row['up_date']}</li>
                               <li class='list-group-item'>
                                 <form action='contact-dealer.php' method='GET'>
                                  <input type='text' name='id' value='{$row['id']}' class='hidden'>
                                  <button type='submit' class='btn btn-default bton'>Answer me</button>
                                 </form>
                               </li>
                            </ul>
                        </div>
                   </div>";
                       
                                } 
                                

                                
//for orders
?>
                
            </div>
          <div class="col-sm-2"></div>
</div><!--row-->

</div>
</div>
    </section>
    <br><br><br>
    <?php  
      include('footer.php');    
    ?>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/yann.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
