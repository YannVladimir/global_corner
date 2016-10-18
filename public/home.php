<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
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
    <title>Home | Get It</title>
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
                             
                <li><a href="home.php" class="active fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
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
                            <ul class="nav nav-tabs">
                                <?php 
                                $query = "SELECT * from categories";
                                $res = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['cat_id']==3)
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
                                    if($row['cat_id']==3)
                                    {
                                         echo "<div class='tab-pane fade active in' id='{$row['cat_id']}' >";
                                    }
                                }
                                $a = 0;
                                $cats = "SELECT * from items where is_accepted=1 order by post_id desc";
                                $res = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res))
                                {
                                    if($row['refcat_id']==3 && $a<4)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                $a = $a+1;
                                    }
                                } 
                                echo "</div>";
                                $res2 = mysqli_query($con,$query);
                                while($row = mysqli_fetch_assoc($res2))
                                {
                                    if($row['cat_id']==4)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                                $res3 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res3))
                                {
                                    if($row['refcat_id']==4)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==5)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res5 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res5))
                                {
                                    if($row['refcat_id']==5)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==6)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res7 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res7))
                                {
                                    if($row['refcat_id']==6)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==7)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                }
                                $res9 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res9))
                                {
                                    if($row['refcat_id']==7)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==8)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                              
                                $res11 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res11))
                                {
                                    if($row['refcat_id']==8)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==9)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                            
                                $res13 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res13))
                                {
                                    if($row['refcat_id']==9)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
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
                                    if($row['cat_id']==10)
                                    {
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                    }
                                } 
                              
                                $res15 = mysqli_query($con,$cats);
                                while($row = mysqli_fetch_assoc($res15))
                                {
                                    if($row['refcat_id']==10)
                                    {
                                         echo "<div class='col-sm-3'>
                                    <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>

                                                <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt='' />
                                                <h4>{$row['name']}</h4>
                                                <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>";
                                    }
                                }
                                echo "</div>"; 
         ?>
                            
                         </div>
                        </div>
                    </div><!--/category-tab-->
                    
                   
                </div>
                
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
    