<?php  
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
/*if(!isset($_SESSION['id']))
{
  $id = $_GET['id'];
  $_SESSION['message'] = 'Please log in to your acount to continue';
  $_SESSION['page'] = 'my_service'; 
  require_once ('login.php?id=$id');
  exit;
}*/
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Services</title>
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
     /*.sizingimagesmax{
        height: 190px;

      }*/
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
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="categories.php" class="fon">Products</a></li>
                <li><a href="services.php" class="active fon">Services</a></li>
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
  
    <section>
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
                  <div class="right-sidebar">
                    <br>
            
          </div>
        </div>
        <div class="col-sm-8 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-3">
                            <div class="view-product">
                        <?php
                            $id = $_GET['id'];
                            $query = "SELECT * FROM amaservice where id = $id ";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                                if($row['main'] == 'noimage.jpg' || $row['main'] == '' )
                                {
                                   if($row['is_accepted']==0)
                              {
                                $accepted = 'The adminstration is currently verifying this post';
                              }
                              else
                              {
                                $accepted = '';
                              }
                              if($row['avg']==0){
                                $img = '<b>Rank:</b> Not available <br>';
                              }
                              elseif($row['avg']<=1.25)
                              {
                                $img = '<img src="assets/images/shop/rating2.png" alt="" />';
                              }
                              elseif ($row['avg']>1.25 && $row['avg']<1.75) {
                                $img = '<img src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>1.75 && $row['avg']<2.25) {
                                $img = '<img src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>2.25 && $row['avg']<2.75) {
                                $img = '<img src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>2.75 && $row['avg']<3.25) {
                                $img = '<img src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>3.25 && $row['avg']<3.75) {
                                $img = '<img src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>3.75 && $row['avg']<4.25) {
                                $img = '<img src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>4.25 && $row['avg']<4.75) {
                                $img = '<img src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img src="assets/images/shop/rating10.png" alt="" />';
                              }

                                echo"
                                </div> 
                        </div>
                        <div class='col-sm-7'>
                            <div class='product-information'><!--/product-information-->
                               
                                
                                    {$img}
                                    <label>Total votes ({$row['total_votes']})</label>
                                
                                <p><b>Title:</b>{$row['title']}</p>
                                <p><b>Category:</b>{$row['category']}</p>
                                <p><b>Sub-Category:</b>{$row['sub_category']}</b></p>
                                <p><b>Seller:</b> {$row['reserved']}</p>
                                <p><b>Description:</b> {$row['details']}</p>
                                <p><b>Location:</b> {$row['location']}</p>
                                <p><b>Contacts:</b> {$row['phone']}</p>
                                <p><b>Current status:</b> {$accepted}</p>
                                
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    ";
                                }
                                else
                                {
                                    if($row['is_accepted']==0)
                                    {
                                       $accepted = 'The adminstration is currently verifying this post';
                                    }
                                    else
                                    {
                                       $accepted = '';
                                    }
                                    if($row['avg']==0){
                                       $img = '<b>Rank:</b> Not available <br>';
                                    }
                                    elseif($row['avg']<=1.25)
                                    {
                                       $img = '<img src="assets/images/shop/rating2.png" alt="" />';
                                    }
                                    elseif ($row['avg']>1.25 && $row['avg']<1.75) {
                                    $img = '<img src="assets/images/shop/rating3.png" alt="" />';
                                    }
                                    elseif ($row['avg']>1.75 && $row['avg']<2.25) {
                                     $img = '<img src="assets/images/shop/rating4.png" alt="" />';
                                    }
                                    elseif ($row['avg']>2.25 && $row['avg']<2.75) {
                                     $img = '<img src="assets/images/shop/rating5.png" alt="" />';
                                     }
                                      elseif ($row['avg']>2.75 && $row['avg']<3.25) {
                                     $img = '<img src="assets/images/shop/rating6.png" alt="" />';
                                     }
                                     elseif ($row['avg']>3.25 && $row['avg']<3.75) {
                                     $img = '<img src="assets/images/shop/rating7.png" alt="" />';
                                     }
                                    elseif ($row['avg']>3.75 && $row['avg']<4.25) {
                                    $img = '<img src="assets/images/shop/rating8.png" alt="" />';
                                    }
                                    elseif ($row['avg']>4.25 && $row['avg']<4.75) {
                                    $img = '<img src="assets/images/shop/rating9.png" alt="" />';
                                    }
                                    else{
                                     $img = '<img src="assets/images/shop/rating10.png" alt="" />';
                                    }

                                echo"<img src='assets/images/posts/{$row['main']}' alt='' />
                                </div> 
                        </div>
                        <div class='col-sm-7'>
                            <div class='product-information'><!--/product-information-->
                               
                                
                                    {$img}
                                    <label>Total votes ({$row['total_votes']})</label>
                                
                                <p><b>Title:</b>{$row['title']}</p>
                                <p><b>Category:</b>{$row['category']}</p>
                                <p><b>Sub-Category:</b>{$row['sub_category']}</b></p>
                                <p><b>Seller:</b> {$row['reserved']}</p>
                                <p><b>Description:</b> {$row['details']}</p>
                                <p><b>Location:</b> {$row['location']}</p>
                                <p><b>Contacts:</b> {$row['phone']}</p>
                                <p><b>Current status:</b> {$accepted}</p>
                                
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    ";
                                }
                                
                            }
                        ?>
            
                    <div class='category-tab shop-details-tab'><!--category-tab-->
                        <div class='col-sm-12'>
                            <ul class="nav nav-tabs">
                                <li><a href='#details' data-toggle='tab'>Experience</a></li>
                                <li class='active'><a href='#companyprofile' data-toggle='tab'>Working Hours</a></li>
                                <li><a href='#tag' data-toggle='tab'>Reviews</a></li>
                                <li><a href='#reviews' data-toggle='tab'>Rate it</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active" id="details" >
                                <!--<div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            
                            <div class="tab-pane fade" id="companyprofile" >
                                <div class="col-sm-2">
                                </div>
                               
                                <div class="col-sm-8">
                                    <?php
                                       $query = "SELECT * from working_hours where service_id = '{$id}'";
                                       $r = mysqli_query($con,$query);
                                       while($row = mysqli_fetch_assoc($r)){
                                       if($row['monday'] == 'nothing' || $row['monday'] == '' )
                                       {
                                        echo"<p><b>Monday:</b> Not mentioned
                                        <button id='mondaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></p>";
                                    echo" <div id='mondayn' style='display:none;'>
                                  <form action='workingnew.php' method='POST'>
                                    <textarea name='monday' rows='3' placeholder='please provide the working time for monday, leave it empty if no work on monday'></textarea>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<p><b>Monday:</b>{$row['monday']}
                                        <button id='mondayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></p>";
                                    echo" <div id='mondayo' style='display:none;'>
                                  <form action='working.php' method='POST'>
                                    <textarea name='monday' rows='3' placeholder='please provide the working time for monday, leave it empty if no work on monday'></textarea>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>";
                                       }
                                       }
                                    ?>
                                    
                                </div>
                                
                            <div class="tab-pane fade" id="tag" >
                                <!--<div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            
                            
                            
                        </div>
                    </div><!--/category-tab-->
                </div>
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
     <script type="text/javascript">
  $(document).ready(function()
  {
      $("#mondaynew").click(function()
              {
                  $("#mondayn").slideToggle()
              });
      $("#mondayold").click(function()
              {
                  $("#mondayo").slideToggle();
              });
      
  });
   </script>
</body>
</html>
