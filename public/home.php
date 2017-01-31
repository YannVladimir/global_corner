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
      /*.sizingimages{
        height: 200px;
      }
      .sizingimagesmax{
        height: 190px;
      }*/
      .slidersizing{
        height:320px;
      }
      .fon{
        font-size: 20px;

      }
      .ratesize{
        height: 25px;
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
                <li><a href="upload.php" class="fon">Post your ad</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="categories.php" class="fon">Products</a></li>
                <li><a href="services.php" class="fon">Services</a></li>
                <li><a href="orders.php" class="fon">Orders</a></li>
                
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
    <div class="col-sm-3">
      <div class="right-sidebar">
        <br>
        <h2 class="title text-center">Service categories</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        <?php 
          $c = 11;
          $query = "SELECT * FROM service_categories ";
          $res = mysqli_query($con,$query);
          while($row = mysqli_fetch_assoc($res))
          {
            if($row['id']==$c)
            {
              echo "<div class='panel panel-default'>
                        <div class='panel-heading'>
                          <h4 class='panel-title'>
                           <a data-toggle='collapse' data-parent='#accordian' href='#{$row['id']}'>
                            <span class='badge pull-right'><i class='fa fa-angle-down'></i></span>
                            {$row['category']}
                           </a>
                          </h4>
                        </div>
                        <div id='$c' class='panel-collapse collapse'>
                          <div class='panel-body'>
                            <ul>";
                              $queryy = "SELECT * FROM service_subcategories ";
                              $re = mysqli_query($con,$queryy);
                              while($ro = mysqli_fetch_assoc($re))
                              {
                                if($ro['ref1']==$c|| $ro['ref2']==$c || $ro['ref3']==$c || $ro['ref4']==$c)
                                {
                                  echo "<li><a href='service-sub-category.php?id={$ro['id']}'>*   {$ro['sub_category']} </a></li>";
                                }
                              }
            }
                     echo"</div>
                        </div>
                    </div>";
                   $c = $c+1;
                                            
          } 
      ?>
        </div><!--/category-productsr-->
      </div>
    </div>
    <div class="col-sm-9 padding-right">
      <br>
      <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
          <h2 class="title text-center">Recomended products</h2><br>
          <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==2)
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
                                $cats = "SELECT * from items where refcat_id=2 and is_accepted=1 order by post_id desc limit 8";
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
                        <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";

                                   
                                } 
                                echo "</div>";
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
                                $cats = "SELECT * from items where refcat_id=8 and is_accepted=1 order by photo1 desc limit 4";
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";
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
                                $cats = "SELECT * from items where refcat_id=3 and is_accepted=1 order by main limit 4";
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";echo "</div>";

                                
//for electronics
?>
<div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==1)
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";echo "</div>";

                                
//for laptops
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";echo "</div>";

                                
//for furnitures
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";echo "</div>";

                                
//for real estates
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
                                                       <h2>{$row['place_name']} District</h2>
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
                                                       <h2>{$row['place_name']} District</h2>
                                                       <p>{$row['uploaded_date']}</p>
                                                       <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                    </div>
                                                </div>
                                             </div>
                                
                                         </div>
                                       </div>";
                                   
                                } 
                                echo "</div>";echo "</div>";

                                
//for sports
?>
</div><!--/category-tab-->
</div> 
</div><!--/row--><br><br>
<div class="row">
        <div class="col-sm-12 pull-left">
          <h2 class="title text-center">Recomended service providers</h2>
            
                    <br>
                    <?php 
                       $query = "SELECT * FROM amaservice where is_accepted = 1 order by total_marks desc limit 20";
                       $res = mysqli_query($con,$query);
                       while($row = mysqli_fetch_assoc($res))
                       {
                        if($row['main'] == 'noimage.jpg' || $row['main'] == '' )
                        {
                              if($row['avg']==0){
                                $img = '<img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" />';

                              }
                              elseif($row['avg']<=1.25)
                              {
                                $img = '<img class="ratesize" src="assets/images/shop/rating2.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.25 && $row['avg']<1.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.75 && $row['avg']<2.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.25 && $row['avg']<2.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.75 && $row['avg']<3.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.25 && $row['avg']<3.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.75 && $row['avg']<4.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>=4.25 && $row['avg']<4.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img class="ratesize" src="assets/images/shop/rating10.png" alt="" />';
                              }

                        echo "<div class='col-sm-6'>
                        <br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <a href='service.php?id={$row['id']}'>
                                                       <img  src='assets/images/posts/noimage.png' alt='' class=''/>
                                                    </a>
                                                  </div>
                                            </div> <br><br>
                                            <b> <a href='service-sub-category.php?id={$row['subcategory_id']}'>{$row['category']} <br> {$row['sub_category']}</b></a>
                                            
                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-8'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        {$img}<br> <b>{$row['avg']} stars | </b>
                                        <b>Total votes: {$row['total_votes']}</b><br>
                                        <span>
                                             <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></a></div>";
                        }
                        else
                        {
                          if($row['avg']==0){
                                $img = '<img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" />';
                              }
                              elseif($row['avg']<=1.25)
                              {
                                $img = '<img class="ratesize" src="assets/images/shop/rating2.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.25 && $row['avg']<1.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.75 && $row['avg']<2.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.25 && $row['avg']<2.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.75 && $row['avg']<3.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.25 && $row['avg']<3.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.75 && $row['avg']<4.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>=4.25 && $row['avg']<4.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img class="ratesize" src="assets/images/shop/rating10.png" alt="" />';
                              }

                        echo "<div class='col-sm-6'>
                        <br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <a href='service.php?id={$row['id']}'>
                                                    <img src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                    </a>
                                                  </div>
                                            </div><br><br>
                                            <b> <a href='service-sub-category.php?id={$row['subcategory_id']}'>{$row['category']} <br> {$row['sub_category']}</b></a>

                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-8'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        {$img}<br> <b>{$row['avg']} stars | </b>
                                        <b>Total votes: {$row['total_votes']}</b><br>
                                        <span>
                                             <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></a></div>";
                        }
                       }
                    ?>
      </div>
      
</div><!--row-->
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
                              // $d = 0;
                                while($row = mysqli_fetch_assoc($res))
                                { 
                                 /* if ($d%4 != 0)
                                  {

                                  }*/
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
