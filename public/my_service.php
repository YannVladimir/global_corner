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
       .starting{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border:3px;
      }
      
      .btnlocation{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border-style: none;
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
                <li><a href="upload.php" class="fon">Post your ad</a></li>
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
                        
                        <?php
                            $id = $_GET['id'];
                            $query = "SELECT * FROM amaservice where id = $id ";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                               
                                  echo'<div class="col-sm-2">
                                          <div class="view-product">';
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
                              elseif ($row['avg']>=1.25 && $row['avg']<1.75) {
                                $img = '<img src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.75 && $row['avg']<2.25) {
                                $img = '<img src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.25 && $row['avg']<2.75) {
                                $img = '<img src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.75 && $row['avg']<3.25) {
                                $img = '<img src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.25 && $row['avg']<3.75) {
                                $img = '<img src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.75 && $row['avg']<4.25) {
                                $img = '<img src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>=4.25 && $row['avg']<4.75) {
                                $img = '<img src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img src="assets/images/shop/rating10.png" alt="" />';
                              }

                                echo"
                                </div> 
                        </div>
                        <div class='col-sm-8'>
                            <div class='product-information'><!--/product-information-->
                               
                                
                                    
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
                        ?>
            
                    <div class='category-tab shop-details-tab'><!--category-tab-->
                        <div class='col-sm-12'>
                            <ul class="nav nav-tabs">
                              <li><a href='#photos' data-toggle='tab'>Images</a></li>
                              <?php 
                                 $reviews = 0; 
                                  $user = $_SESSION['id'];
                                  $query = "SELECT * from votes where service_id = '{$id}' and user = '{$user}'";
                                  $r = mysqli_query($con,$query);
                                  while($row = mysqli_fetch_assoc($r))
                                  {
                                    $reviews = $reviews + 1;
                                  }
                                  echo "<li class='active'><a href='#tag' data-toggle='tab'>Reviews ($reviews)</a></li>";
                                  ?>
                                <li><a href='#details' data-toggle='tab'>Experience</a></li>
                                <li><a href='#companyprofile' data-toggle='tab'>Working Hours</a></li>

                      
                            </ul>
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane fade" id="photos" >
                             <div class="col-sm-2">
                                </div>
                               
                                <div class="col-sm-8">
                                   <form action="more_images.php" method="GET" enctype="multipart/form-data">
                                    Upload more images:
                                    <?php
                                      echo '<input type="text" name="id" class="hidden" value="{$id}" />';
                                    ?>  
                                    <input type="file" name="main" /><input type="submit" class="btn btn-primary" /><br><br>
                                   </form>
                                    <?php
                                      $query = "SELECT * FROM more_images where service_id = $id order by id desc";
                                      $res = mysqli_query($con,$query);
                                      while($row = mysqli_fetch_assoc($res))
                                      {
                                          echo" <img src='assets/images/posts/{$row['image']}' alt='' class='imagesize'/>' <br><br>";
                                      }
                                      $query = "SELECT * FROM amaservice where id = $id ";
                                      $res = mysqli_query($con,$query);
                                      while($row = mysqli_fetch_assoc($res))
                                      {
                                        if($row['main'] == 'noimage.jpg' || $row['main'] == '' || $row['main'] == 'error' || $row['main'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                          echo" <img src='assets/images/posts/{$row['main']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                        if($row['photo1'] == 'noimage.jpg' || $row['photo1'] == '' || $row['photo1'] == 'error' || $row['photo1'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                            echo"<img src='assets/images/posts/{$row['photo1']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                        if($row['photo2'] == 'noimage.jpg' || $row['photo2'] == '' || $row['photo2'] == 'error' || $row['photo2'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                            echo" <img src='assets/images/posts/{$row['photo2']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                        if($row['photo3'] == 'noimage.jpg' || $row['photo3'] == '' || $row['photo3'] == 'error' || $row['photo3'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                            echo" <img src='assets/images/posts/{$row['photo3']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                        if($row['photo4'] == 'noimage.jpg' || $row['photo4'] == '' || $row['photo4'] == 'error' || $row['photo4'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                            echo" <img src='assets/images/posts/{$row['photo4']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                        if($row['photo5'] == 'noimage.jpg' || $row['photo5'] == '' || $row['photo5'] == 'error' || $row['photo5'] == 'noimage.png')
                                        {
                                          
                                        }
                                        else
                                        {
                                            echo" <img src='assets/images/posts/{$row['photo5']}' alt='' class='imagesize'/>' <br><br>";
                                        }
                                      }
                                        
                                    ?>

                                    
                                </div>
                          </div>
                          <div class="tab-pane fade active in" id="tag" >
                                <?php
                                  if($reviews == 0)
                                  {
                                    echo 'No reviews available for this post';
                                  }
                                  else{
                                  $query = "SELECT * from votes where service_id = '{$id}' and user='{$user}'";
                                  $r = mysqli_query($con,$query);
                                  while($row = mysqli_fetch_assoc($r))
                                  {
                                    if($row['marks']==1)
                                    {
                                      $img = '<img src="assets/images/shop/rating2.png" alt="" />';
                                    }
                                    elseif($row['marks']==2)
                                    {
                                      $img = '<img src="assets/images/shop/rating4.png" alt="" />';
                                    }
                                    elseif($row['marks']==3)
                                    {
                                       $img = '<img src="assets/images/shop/rating6.png" alt="" />';
                                    }
                                    elseif($row['marks']==4)
                                    {
                                      $img = '<img src="assets/images/shop/rating8.png" alt="" />';
                                    }
                                    else
                                    {
                                      $img = '<img src="assets/images/shop/rating10.png" alt="" />';
                                    }
                                    echo'<div class="row">';
                                    echo'<div class="col-sm-2"></div>
                                    <div class="col-sm-8">';
                                    echo'<div class="media commnets">
                                    <div class="media-body">';
                                    echo "
                                    <h4 class='media-heading'>{$row['name']}</h4>
                                          <p>{$row['experience']}</p>
                                          <p><b>Rank: {$img} </b> | <b>Date: {$row['vote_date']}</b></p>
                                          ";
                                    echo'</div></div></div>';
                                    echo'<div class="col-sm-2"></div></div>';
                                    
                                  }
                                }
                                ?>
                            </div>
                            
                            <div class="tab-pane fade" id="details" >
                              
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
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>
                                        <p><b>Monday:</b> Not mentioned</p></div>
                                        <div class='col-sm-2'>
                                        <button id='mondaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='mondayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='monday' rows='3' placeholder='please provide the working time for monday, leave it empty if no work on monday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='monday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                  </div>
                                  </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Monday:</b>{$row['monday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='mondayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='mondayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='monday' rows='3' placeholder='please update the working time for monday, leave it empty if no work on monday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='monday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       if($row['tuesday'] == 'nothing' || $row['tuesday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Tuesday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='tuesdaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='tuesdayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='tuesday' rows='3' placeholder='please provide the working time for tuesday, leave it empty if no work on tuesday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='tuesday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div></div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Tuesday:</b>{$row['tuesday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='tuesdayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='tuesdayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='tuesday' rows='3' placeholder='please provide the working time for tuesday, leave it empty if no work on tuesday'></textarea>
                                   <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                   <input type='text' style='display:none;' name='day' value='tuesday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div></div>";
                                       }
                                       if($row['wednesday'] == 'nothing' || $row['wednesday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Wednesday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='wednesdaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='wednesdayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='wednesday' rows='3' placeholder='please provide the working time for wednesday, leave it empty if no work on wednesday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='wednesday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Wednesday:</b>{$row['wednesday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='wednesdayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='wednesdayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='wednesday' rows='3' placeholder='please provide the working time for wednesday, leave it empty if no work on wednesday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='wednesday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       if($row['thursday'] == 'nothing' || $row['thursday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Thursday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='thursdaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='thursdayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='thursday' rows='3' placeholder='please provide the working time for thursday, leave it empty if no work on thursday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='thursday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Thursday:</b>{$row['thursday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='thursdayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='thursdayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='thursday' rows='3' placeholder='please provide the working time for thursday, leave it empty if no work on thursday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='thursday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       if($row['friday'] == 'nothing' || $row['friday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Friday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='fridaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='fridayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='friday' rows='3' placeholder='please provide the working time for friday, leave it empty if no work on friday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='friday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Friday:</b>{$row['friday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='fridayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='fridayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='friday' rows='3' placeholder='please provide the working time for friday, leave it empty if no work on friday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='friday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       if($row['saturday'] == 'nothing' || $row['saturday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Saturday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='saturdaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='saturdayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='saturday' rows='3' placeholder='please provide the working time for saturday, leave it empty if no work on saturday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='saturday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Saturday:</b>{$row['saturday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='saturdayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='saturdayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='saturday' rows='3' placeholder='please provide the working time for saturday, leave it empty if no work on saturday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='saturday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       if($row['sunday'] == 'nothing' || $row['sunday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Sunday:</b> Not mentioned </p></div>
                                        <div class='col-sm-2'>
                                        <button id='sundaynew' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Add working hour
                                    </button></div>";
                                    echo" <div id='sundayn' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='sunday' rows='3' placeholder='please provide the working time for sunday, leave it empty if no work on sunday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='sunday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Sunday:</b>{$row['sunday']} </p></div>
                                        <div class='col-sm-2'>
                                        <button id='sundayold' type='button' class='btn btn-default cart'>
                                        <i class=''></i>
                                        Change
                                    </button></div>";
                                    echo" <div id='sundayo' style='display:none;'>
                                    <div class='col-sm-8'>
                                  <form action='working_hours.php' method='POST'>
                                    <textarea name='sunday' rows='3' placeholder='please provide the working time for sunday, leave it empty if no work on sunday'></textarea>
                                    <input type='text' style='display:none;' name='id' value='{$row['service_id']}'>
                                    <input type='text' style='display:none;' name='day' value='sunday'>
                                    <input type='submit' value='submit' class='btn btn-default pull-right cart'>
                                  </form>
                                </div>
                                </div>
                                </div>";
                                       }
                                       }
                                    ?>
                                    
                                </div></div>
                                
                            
                            
                            
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
      $("#tuesdaynew").click(function()
              {
                  $("#tuesdayn").slideToggle()
              });
      $("#tuesdayold").click(function()
              {
                  $("#tuesdayo").slideToggle();
              });
      $("#wednesdaynew").click(function()
              {
                  $("#wednesdayn").slideToggle()
              });
      $("#wednesdayold").click(function()
              {
                  $("#wednesdayo").slideToggle();
              });
      $("#thursdaynew").click(function()
              {
                  $("#thursdayn").slideToggle()
              });
      $("#thursdayold").click(function()
              {
                  $("#thursdayo").slideToggle();
              });
      $("#fridaynew").click(function()
              {
                  $("#fridayn").slideToggle()
              });
      $("#fridayold").click(function()
              {
                  $("#fridayo").slideToggle();
              });
      $("#saturdaynew").click(function()
              {
                  $("#saturdayn").slideToggle()
              });
      $("#saturdayold").click(function()
              {
                  $("#saturdayo").slideToggle();
              });

      $("#sundaynew").click(function()
              {
                  $("#sundayn").slideToggle()
              });
      $("#sundayold").click(function()
              {
                  $("#sundayo").slideToggle();
              });
      $(".btn1").bind("click" , function(){
        $("#inp").click();
       });
       document.getElementById("inp").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
      
  });
   </script>
</body>
</html>
