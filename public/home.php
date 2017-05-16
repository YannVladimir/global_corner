<?php 
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
    <meta property="og:site_name" content="250trade.com"/>
    <meta property="og:title" content="Buy and sell for free"/>
      <meta property="og:description" content="A free Rwandan classifieds site. Sell anything from used cars to mobiles, services, furniture, laptops, houses and more.Submit ads for free and without creating an account."/>
    
    <meta property="og:url" content="http://250trade.com/"/>
    
    <meta property="og:image" content="assets/images/home/trade250.png"/>
    <meta property="fb:admins" content="" />
    <meta property="fb:app_id" content="" />
    <meta property="og:type" content="article" /><!--End Facebook OpenGraph Settings -->
    
<!-- All in One SEO Pack 2.2.6.2 by Michael Torbert of Semper Fi Web Design[234,299] -->
<link rel="author"/>
<meta name="description"  content="A free Rwandan classifieds site. Sell anything from used cars to mobiles, services, furniture, laptops, houses and more.Submit ads for free and without creating an account." />

<meta name="keywords"  content="250trade,250trades,250 trade,250 trad,buy online rwanda, online shopping rwanda, rwanda shopping, rwanda online shopping, online shopping websites in rwanda, online shopping websites, online shopping, sell in rwanda, rwanda, 250, 250 rwanda, trade, trade online, trades, trading online" />

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
                       <li><a href="home.php" class="active">Home</a></li>
                <?php  
      include('links.php');    
    ?>
                <li><a href="job_vacancies.php">Job vacancies</a></li>
               <!-- <li><a href="job_vacancies.php" class="fon">Job vacancies</a></li>-->
                
                            </ul>
                        </div>
                    </div>
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
    <div class="col-sm-12"><h2 class="title text-center">Featured orders</h2><br>
     <ul class="nav nav-tabs">
  <?php
  echo "<li class='active pull-right' style='cursor:pointer;'><a style='cursor:pointer' href='orders.php'>View All</a></li>";
  echo "</ul>";
  ?><br>
</div>
  <!--<div class='col-sm-2'></div>-->
                <div class='col-sm-12'>
                           
                                <?php 
                              
                
                        echo "<div class='tab-content'> ";
                               
                             echo "<div class='tab-pane fade active in' id='1' >";
                               $query = "SELECT * from vieworders where is_accepted = 1";
                               $check = 1;
                               $res = mysqli_query($con,$query);
                              
                                while($row = mysqli_fetch_assoc($res))
                                { 
                                if($check%3==1)
                                {
                                  $check = $check+1;
                                 echo " <div class='row'><div class='col-sm-4'>
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
                       elseif ($check%3==2) {
                        $check = $check+1;
                        echo" <div class='col-sm-4'>
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
                       else
                       {
                        $check = $check+1;
                        echo"<div class='col-sm-4'>
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
                   </div></div>";
                       }
                                } 
                                

                                
//for orders
?>
                <br><br>
            </div>
</div><!--row-->
<!--aha niho order kugeza container hejuru-->
  <div class="row">
    <div class="col-sm-12 padding-right">
      <br>
      <div class="category-tab"><!--category-tab-->
        <div class="col-sm-12">
          <h2 class="title text-center">Featured products</h2><br>
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
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            }
                                

                                   
                                } 
                                if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=8 and is_accepted=1 order by post_id limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            }
                                }
                                if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=3 and is_accepted=1 order by post_id desc limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            }    
                                } 
                                if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=1 and is_accepted=1 order by post_id desc limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            } } 
            if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=4 and is_accepted=1 order by post_id desc limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            }} 
            if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=5 and is_accepted=1 order by post_id desc limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            } } if($check % 4 != 1)
                                {
                                  echo"</div>";
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
                                $cats = "SELECT * from items where refcat_id=6 and is_accepted=1 order by post_id desc limit 8";
                                $check = 1;
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if ($row['is_auction']==1)
                                    { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                        <div class='col-sm-3'>
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
                                      }
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                        echo "
                                        <div class='col-sm-3'>
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
              </div>
            </div>";
                                      }
        else{
          $check = $check + 1;
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
              </div>";}
            }
                                       else
                                        { if($check % 4 ==1 )
                                      {
                                        $check = $check + 1;
                                        echo "<div class='row'>
                                         <div class='col-sm-3'>
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
                                      elseif($check % 4 ==0 )
                                      {
                                        $check = $check + 1;
                                      
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
                                       </div>
                                       </div>";
            
                                      }
        else{
          $check = $check + 1;
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
                                       </div>";}
            } } if($check % 4 != 1)
                                {
                                  echo"</div>";
                                }
                                echo "</div>";echo "</div>";

                                
//for sports
?>
</div><!--/category-tab-->
</div> 
</div><!--/row--><br><br>
<div class="row"> 
        <div class="col-sm-12">
          <h2 class="title text-center">Recomended service providers</h2>
             <ul class="nav nav-tabs">
  <?php
  echo "<li class='active pull-right' style='cursor:pointer;'><a style='cursor:pointer' href='services.php'>View All</a></li>";
  echo "</ul>";
  ?>
                    <?php 
                       $query = "SELECT * FROM amaservice where is_accepted = 1 order by avg limit 20";
                      $check = 1;
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
                        if($check%2==1)
                        {
                          $check = $check + 1;
                echo "<div class='row'><div class='col-sm-5'>
                        <br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <!--<a href='service.php?id={$row['id']}'>
                                                       <img  src='assets/images/posts/noimage.png' alt='' class=''/>
                                                    </a>-->
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

                        echo "</div></a></div>
                      

                        ";
                      }
                      else
                      {
                        $check = $check+1;
                        echo "<div class='col-sm-1'></div><div class='col-sm-5'>
                        <br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-4'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <!--<a href='service.php?id={$row['id']}'>
                                                       <img  src='assets/images/posts/noimage.png' alt='' class=''/>
                                                    </a>-->
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

                        echo "</div></a></div>
                      </div>

                        ";
                      }
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
                             if($check%2==1){
                              $check = $check+1;
                        echo "<div class='row'><div class='col-sm-5'>
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

                        echo "</div></a></div>
                        ";
                      }
                      else
                      {
                        $check = $check+1;
                        echo "<div class='col-sm-1'></div><div class='col-sm-5'>
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

                        echo "</div></a></div></div>
                        ";
                      }
                        }
                       }
                    ?>
      </div>
      
</div><!--row-->
<!-- aha niho order uzongera ku yi -->

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
    <!-- Start of StatCounter Code for Default Guide -->

</body>
</html>
