<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
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
          <div class="col-sm-12">
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
                <li><a href="home.php">Home</a></li>
                <?php  
      include('links.php');    
    ?>
                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
  
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
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-2">
                        <?php
                            $id = $_GET['id'];
                            $query = "SELECT * FROM amaservice where id = $id ";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {   
                              $recommended = $row['subcategory_id'];
                              if($row['is_accepted']==0)
                              {
                                $accepted = 'The adminstration is currently verifying this post';
                              }
                              else
                              {
                                $accepted = '';
                              }
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
                              
                                echo" 
                        </div>";
                                echo"
                        <div class='col-sm-8'>
                            <div class='product-information'><!--/product-information-->
                                <h2>Category, {$row['sub_category']}</h2>
                                
                                    {$img}
                                    <label>Total votes ({$row['total_votes']})</label>
                                    <br>
                                    <span>
                                      <span style='color:#232323;'>{$row['title']}</span>
                                    </span>
                                    <br><br>
                                <p><b>Seller:</b> {$row['reserved']}</p>
                                <p><b>Description:</b> {$row['details']}</p>
                                <p><b>Location:</b> {$row['location']}</p>
                                <p><b>Contacts:</b> {$row['phone']}</p>
                                <a href='#reviews' class='pull-right'>
                                    <button type='button' class='btn btn-fefault cart'>
                                        <i class=''></i>
                                        Rate it
                                    </button>
                                </a>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    ";
                            }
                        ?>
            
                    <div class='category-tab shop-details-tab'><!--category-tab-->
                        <div class='col-sm-12'>
                            <ul class="nav nav-tabs">
                                <!--<li><a href='#details' data-toggle='tab'>Experience</a></li>-->
                                <li class='active'><a href='#photos' data-toggle='tab'>Images</a></li>
                                <li><a href='#companyprofile' data-toggle='tab'>Working Hours</a></li>
                                <?php 
                                 $reviews = 0; 
                                  $query = "SELECT * from votes where service_id = '{$id}'";
                                  $r = mysqli_query($con,$query);
                                  while($row = mysqli_fetch_assoc($r))
                                  {
                                    $reviews = $reviews + 1;
                                  }
                                  echo "<li><a href='#tag' data-toggle='tab'>Reviews ($reviews)</a></li>";
                                  ?>
                                  <li><a href='#reviews' data-toggle='tab'>Rate it</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <!--<div class="tab-pane fade" id="details" >
                                for experience
                            </div>-->
                            
                            <div class="tab-pane fade active in" id="photos" >
                             <div class="col-sm-2">
                                </div>
                               
                                <div class="col-sm-8">
                                   
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
                                        ";
                                        echo"
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Monday:</b>{$row['monday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       if($row['tuesday'] == 'nothing' || $row['tuesday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Tuesday:</b> Not mentioned </p></div>
                                        ";
                                    echo"</div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Tuesday:</b>{$row['tuesday']} </p></div>
                                       ";
                                    echo"</div>";
                                       }
                                       if($row['wednesday'] == 'nothing' || $row['wednesday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Wednesday:</b> Not mentioned </p></div>
                                        ";
                                    echo"
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Wednesday:</b>{$row['wednesday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       if($row['thursday'] == 'nothing' || $row['thursday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Thursday:</b> Not mentioned </p></div>
                                        ";
                                    echo"
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Thursday:</b>{$row['thursday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       if($row['friday'] == 'nothing' || $row['friday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Friday:</b> Not mentioned </p></div>
                                        ";
                                    echo"
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Friday:</b>{$row['friday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       if($row['saturday'] == 'nothing' || $row['saturday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Saturday:</b> Not mentioned </p></div>
                                        ";
                                    echo"
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Saturday:</b>{$row['saturday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       if($row['sunday'] == 'nothing' || $row['sunday'] == '' )
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Sunday:</b> Not mentioned </p></div>
                                        ";
                                    echo" 
                                </div>";
                                        
                                       }
                                       else
                                       {
                                        echo"<div class='row'>
                                        <div class='col-sm-8'>";
                                        echo"<p><b>Sunday:</b>{$row['sunday']} </p></div>
                                        ";
                                    echo"
                                </div>";
                                       }
                                       }
                                    ?>
                                   </div> 
                            </div>
                            
                            <div class="tab-pane fade" id="tag" >
                                <?php
                                 $reviews = 0; 
                                  $query = "SELECT * from votes where service_id = '{$id}'";
                                  $r = mysqli_query($con,$query);
                                  while($row = mysqli_fetch_assoc($r))
                                  {
                                    $reviews = $reviews + 1;
                                  }
                                  if($reviews == 0)
                                  {
                                    echo 'No reviews available for this post';
                                  }
                                  else{
                                  $query = "SELECT * from votes where service_id = '{$id}'";
                                  $r = mysqli_query($con,$query);
                                  while($row = mysqli_fetch_assoc($r))
                                  {
                                    if($row['marks']==1)
                                    {
                                      $img = '<img class="ratesize" src="assets/images/shop/rating2.png" alt="" />';
                                    }
                                    elseif($row['marks']==2)
                                    {
                                      $img = '<img class="ratesize" src="assets/images/shop/rating4.png" alt="" />';
                                    }
                                    elseif($row['marks']==3)
                                    {
                                       $img = '<img class="ratesize" src="assets/images/shop/rating6.png" alt="" />';
                                    }
                                    elseif($row['marks']==4)
                                    {
                                      $img = '<img class="ratesize" src="assets/images/shop/rating8.png" alt="" />';
                                    }
                                    else
                                    {
                                      $img = '<img class="ratesize" src="assets/images/shop/rating10.png" alt="" />';
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
                            
                            <div class="tab-pane fade" id="reviews" >
                                <div class="col-sm-12">
                                    <!--<ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>-->
                                    <p>Help others to know very usefull information about this service provider by sharing and rating the experience you have with this service provider </p>
                                    <p><b>Write Your Review</b></p>
                                    
                                    <form action="rating.php" method="POST">
                                        <?php
                                           if(!isset($_SESSION['email']))
                                           {
                                             echo'<span>
                                            <input type="text" required="required" placeholder="Your Name" name="name"/>
                                            <input type="text" required="required" placeholder="Your Phone or Email Address" name="conacts"/>
                                        </span>';
                                           }
                                           $_SESSION['rate_id']= $_GET['id'];

                                        ?>
                                        
                                        <textarea placeholder="Write a short review" name="details"></textarea>
                                         <div class="col-sm-4">
                                            <b>Rating: </b>
                                                         <select class="form-control" required="required" name="marks">
                                                            <option value="">Select rate</option>
                                                            <option value="1">1/5</option>
                                                            <option value="2">2/5</option>
                                                            <option value="3">3/5</option>
                                                            <option value="4">4/5</option>
                                                            <option value="5">5/5</option>
                                                         </select>
                                                        </div>
                                                        <input type="submit" class="btn btn-default pull-right"/>
                    
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div><!--/category-tab-->
                    
                    <div class="recommended_items col-sm-8"><!--recommended_items-->
                        <!--shyiramo s_cat name hagati ya recommended na sellers-->
                        
                      <?php
                      $b=0; 
                       $query = "SELECT * FROM amaservice where is_accepted = 1 and subcategory_id = $recommended and id != '{$id}' order by total_marks desc limit 5";
                       $res = mysqli_query($con,$query);
                       while($row = mysqli_fetch_assoc($res))
                       {
                         if($b==0)
                         {
                            echo"<h2 class='title text-center'>recommended {$row['sub_category']}</h2>";
                            $b = $b+1;
                         }
                        if($row['main'] == 'noimage.jpg' || $row['main'] == '' )
                        {
                              if($row['avg']==0){
                                $img = '<img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" />br>';
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

                        echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-5'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <img class='sizingimagesmax' src='assets/images/posts/noimage.png' alt='' class=''/>
                                                  </div>
                                            </div>
                                            <b> {$row['category']} - {$row['sub_category']}</b>
                                            <div class='product-overlay' style='opacity:0.9'>
                                                 <div class='overlay-content'>
                                                     <a href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                 </div>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-7'>
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

                        echo "</div></a>";
                        }
                        else
                        {
                          if($row['avg']==0){
                                $img = '<b>Rank:</b> Not available <br>';
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

                        echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-5'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                  </div>
                                            </div>
                                            <b> {$row['category']} - {$row['sub_category']}</b>
                                            <div class='product-overlay' style='opacity:0.9'>
                                                 <div class='overlay-content'>
                                                     <a href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                                 </div>
                                            </div>
                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-7'>
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

                        echo "</div></a>";
                        }
                       }
                    ?>
                    </div><!--/recommended_items-->
                    
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
</body>
</html>
