<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Item</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/slider.css" rel="stylesheet">
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
        
        .fon{
        font-size: 20px;
      }
    
        
        /* .sizingimagesmax{
           display: block;
           width:100%;
           height:auto;

        }*/
        .displaynone{
          display: none;
        }
       .jssora11l, .jssora11r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 37px;
                    height: 37px;
                    cursor: pointer;
                    background: url(assets/images/slider/a11.png) no-repeat;
                    overflow: hidden;
                }
                .jssora11l { background-position: -11px -41px; }
                .jssora11r { background-position: -71px -41px; }
                .jssora11l:hover { background-position: -131px -41px; }
                .jssora11r:hover { background-position: -191px -41px; }
                .jssora11l.jssora11ldn { background-position: -251px -41px; }
                .jssora11r.jssora11rdn { background-position: -311px -41px; }
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
          
            <?php 
                            $id = $_GET['id'];
                            $query = "SELECT * FROM items where post_id = '{$id}' and is_accepted = 1";
      
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                              $sub_id = $row['subcat_id']; 
                              echo "<div class='product-details'><!--product-details-->
            <div class='col-sm-6'>
              <div class='product-information'><!--/product-information-->
                <!--<img src='assets/images/product-details/new.jpg' class='newarrival' alt='' />-->
                <span>
                  <span>{$row['name']}</span>
                </span>
                <p>{$row['details']}</p>
                <h2>{$row['price']} Rwf</h2>
                <p>Seller: <b>{$row['seller']}</b></p>
                <p>Place:<b> {$row['place_name']}</b></p>
                <p>Contact number:<b> {$row['contacts']}</b></p>
                <p>Uploaded Date:<b>{$row['uploaded_date']}</b></p>
                <a href=''><img src='assets/images/product-details/share.png' class='share img-responsive'  alt='' /></a>
              </div><!--/product-information-->
            </div>

            <div class='col-sm-6'>
              <div class='category-tab'><!--photo-tab-->
            <div class='col-sm-12'>
              <ul class='nav nav-tabs'>
                <li class='active'><a href='#tshirt' data-toggle='tab'>1st</a></li>
                <li><a href='#blazers' data-toggle='tab'>2nd</a></li>
                <li><a href='#sunglass' data-toggle='tab'>3rd</a></li>
                <li><a href='#kids' data-toggle='tab'>4th</a></li>
                <li><a href='#kidss' data-toggle='tab'>5th</a></li>
              </ul>
            </div>
            <div class='tab-content'>
              <div class='tab-pane fade active in' id='tshirt' >
                <img class='sizingimagesmax' style='width:100%;' src='assets/images/posts/{$row['main']}' alt=''/>
              </div>
                            <div class='tab-pane fade' id='blazers' >
                <img class='sizingimagesmax' style='width:100%;' src='assets/images/posts/{$row['photo1']}' alt=''/>
              </div>
              <div class='tab-pane fade' id='sunglass' >
                <img class='sizingimagesmax' style='width:100%;' src='assets/images/posts/{$row['photo2']}' alt=''/>
              </div>
              <div class='tab-pane fade' id='kids' >
                <img class='sizingimagesmax' style='width:100%;' src='assets/images/posts/{$row['photo3']}' alt=''/>
              </div>
              <div class='tab-pane fade' id='kidss' >
                <img class='sizingimagesmax' style='width:100%;' src='assets/images/posts/{$row['photo4']}' alt=''/>
              </div>
              </div>
          </div><!--/photo-tab-->
            </div>
          </div><!--/product-details-->";
                            } 
                            
                               
                        ?>
                    </div>
                
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Categories</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <?php 
                                            $c = 1;
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
      <div class="row">
        <div class="col-sm-12">

            <div class='recommended_items'><!--recommended_items-->
            <h2 class='title text-center'>recommended items</h2>
           <?php 
 
                           $queryyy = "SELECT * FROM items where subcat_id = '{$sub_id}' and post_id !='{$id}' and is_accepted = 1 order by post_id desc limit 4";
      
                            $res1 = mysqli_query($con,$queryyy);
                            while($row = mysqli_fetch_assoc($res1))
                            {
                                echo"
                                <div class='col-sm-3'>
                    <div class='product-image-wrapper'>
                      <div class='single-products'>
                        <div class='productinfo text-center'>
                          <img src='assets/images/posts/{$row['main']}' alt='' />
                          <h2>{$row['price']}</h2>
                          <p>{$row['name']}</p>
                                <a href='product.php?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View item</a>
                        </div>
                      </div>
                    </div>
                  </div>";}
                  echo "</div>";

            ?>
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
  <script src="assets/js/jquery-1.9.1.min.js"></script>
</body>
</html>
