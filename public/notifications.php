<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
$a = $_SESSION['id'];
$query = "SELECT * from users where user_id = '{$a}'";
$res = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($res);
$bp = $row['buy_product'];
$sp = $row['sell_product'];
$bs = $row['buy_service'];
$ss = $row['sell_service'];

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
  
  
  <section>
    <div class="container">
      <div class="row"><div class="col-sm-2"></div>
        <div class="col-sm-8 padding-right">
                    <br>
                    
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                           <h2 class="title text-center">Recomended products and services to buy</h2><br>
                                    
                                <?php
                                $number = 0;
                                $c = "SELECT * from notifications where target = '{$bp}' and type = 2 and is_accepted = 1 order by post_id";
                                $r = mysqli_query($con,$c);
                                while ($ro = mysqli_fetch_assoc($r))
                                {
                                   $number = $number + 1;
                                } 
                                if($number>=0)
                                {
                                  if($number == 0)
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left'><a href='my_acount.php#choosing'>Products: Not available</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Choose category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  else{
                                    echo'<ul class="nav nav-tabs">';
                                  echo"
                                         <li class='pull-left' style='cursor:pointer'><a style='cursor:pointer' href='sub-category.php?id=$bp'>Total products ($number)</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Change category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  
                                 $c = "SELECT * from notifications where target = '{$bp}' and type = 2 order by post_id limit 20";
                                 $r = mysqli_query($con,$c);
                                 while ($ro = mysqli_fetch_assoc($r))
                                 {
                                  $cats = "SELECT * from items where post_id = '{$ro['post_id']}' and is_accepted =1";
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
                                }
                                }
                               
                                echo "</div></div>";

                                
//for recomanded products to buy
?>
<div class="col-sm-12"><br>
                        <?php
                        
                           $number = 0;
                                $c = "SELECT * from notifications where target = '{$bs}' and type = 3 and is_accepted = 1";
                                $r = mysqli_query($con,$c);
                                while ($ro = mysqli_fetch_assoc($r))
                                {
                                   $number = $number + 1;
                                } 
                                if($number>=0)
                                {
                                  if($number == 0)
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left'><a href='my_acount.php#choosing'>Service Providers: Not available</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Choose category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  else
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left' style='cursor:pointer'><a style='cursor:pointer' href='service-sub-category.php?id=$bs'>Total service providers ($number)</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Change category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                $c = "SELECT * from notifications where target = '{$bs}' and type = 3 order by post_id limit 20";
                                 $r = mysqli_query($con,$c);
                                 while ($ro = mysqli_fetch_assoc($r))
                                 {
                                  $cats = "SELECT * from amaservice where id = '{$ro['post_id']}' and is_accepted =1";
                                  $res = mysqli_query($con,$cats);
                                  while($row = mysqli_fetch_assoc($res))
                                {

                                 echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-2'></div>
                            <div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                  </div>
                                            </div>
                                            <div class='product-overlay' style='opacity:0.9'>
                                                 <div class='overlay-content'>
                                                     <a href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                 </div>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-5'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        <img src='assets/images/shop/rating7.png' class='newarrival' alt='' />
                                        <span>
                                          <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></div>";
                       }
                       }
}
                                
//for recomanded service to buy
?><br><br><br><br></div>
<div class="col-sm-12">
                           <h2 class="title text-center">Recomended clients</h2><br>
                                    
                                <?php
                                $numbera = 0;
                                $ca = "SELECT * from notifications where target = '{$sp}' and type = 1 and is_accepted = 0 order by post_id";
                                $ra = mysqli_query($con,$ca);
                                while ($roa = mysqli_fetch_assoc($ra))
                                {
                                   $numbera = $numbera + 1;
                                } 
                                if($numbera>=0)
                                {
                                  if($numbera == 0)
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left'><a href='my_acount.php#choosing'>Products orders: Not available</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Choose category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  else{
                                    echo'<ul class="nav nav-tabs">';
                                  echo"
                                         <li class='pull-left' style='cursor:pointer'><a style='cursor:pointer' href='sub-category.php?id=$sp'>Total product orders ($numbera)</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Change category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  
                                 $ca = "SELECT * from notifications where target = '{$sp}' and type = 1 order by post_id limit 20";
                                 $ra = mysqli_query($con,$ca);
                                 while ($roa = mysqli_fetch_assoc($ra))
                                 {
                                  $catsa = "SELECT * from vieworders where id = '{$roa['post_id']}' ";
                                  $resa = mysqli_query($con,$catsa);
                                  while($rowa = mysqli_fetch_assoc($resa))
                                  {
                                    echo "<div class='col-sm-4'>
                                             <div class='panel panel-default text-center'>
                                                 <div class='panel-heading'>
                                                 <h2 class='panel-title'><strong>{$rowa['name']} </strong></h2>
                                             </div>
                                             <ul class='list-group'>
                                                <li class='list-group-item'><strong></strong>{$rowa['details']}</li>
                                                <li class='list-group-item'><strong></strong>{$rowa['place']}</li>
                                                <li class='list-group-item'><strong></strong>{$rowa['up_date']}</li>
                                                <li class='list-group-item'>
                                                    <form action='contact-dealer.php' method='GET'>
                                                       <input type='text' name='id' value='{$rowa['id']}' class='hidden'>
                                                       <button type='submit' class='btn btn-default bton'>Answer me</button>
                                                    </form>
                                                </li>
                                             </ul>
                                          </div>";
                                     /*echo " 
                           
                                
                            ";
                      echo "
                               
                               
                            
                        </div>
                   </div>"; */

                                   
                                }
                                }
                                }
                               
                                echo "</div></div>";

                                
//for recomanded products to buy
?>
<div class="col-sm-12"><br>
                        <?php
                        
                           $number = 0;
                                $c = "SELECT * from notifications where target = '{$bs}' and type = 3 and is_accepted = 1";
                                $r = mysqli_query($con,$c);
                                while ($ro = mysqli_fetch_assoc($r))
                                {
                                   $number = $number + 1;
                                } 
                                if($number>=0)
                                {
                                  if($number == 0)
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left'><a href='my_acount.php#choosing'>Service Providers: Not available</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Choose category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                  else
                                  {
                                    echo'<ul class="nav nav-tabs">';
                                  echo"<li class='pull-left' style='cursor:pointer'><a style='cursor:pointer' href='service-sub-category.php?id=$bs'>Total service providers ($number)</a></li>
                                         <li class='active pull-right' style='cursor:pointer'><a style='cursor:pointer' href='my_acount.php#choosing'>Change category</a></li>";
                                  echo "</ul>
                                         </div>
                                     <div class='tab-content'> ";
                                  echo "<div class='tab-pane fade active in' id='1' >";
                                  }
                                $c = "SELECT * from notifications where target = '{$bs}' and type = 3 order by post_id limit 20";
                                 $r = mysqli_query($con,$c);
                                 while ($ro = mysqli_fetch_assoc($r))
                                 {
                                  $cats = "SELECT * from amaservice where id = '{$ro['post_id']}' and is_accepted =1";
                                  $res = mysqli_query($con,$cats);
                                  while($row = mysqli_fetch_assoc($res))
                                {

                                 echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-2'></div>
                            <div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                  </div>
                                            </div>
                                            <div class='product-overlay' style='opacity:0.9'>
                                                 <div class='overlay-content'>
                                                     <a href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                 </div>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-5'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        <img src='assets/images/shop/rating7.png' class='newarrival' alt='' />
                                        <span>
                                          <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></div>";
                       }
                       }
}
                                
//for recomanded service to buy
?>
</div><!--/category-tab-->
</div> 
</div><!--/row-->  
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
  <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
