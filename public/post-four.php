<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
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
    
        
       /*  .sizingimagesmax{
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
                <li><a href="categories.php" class="active fon">Products</a></li>
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
  
  <!--<section id="advertisement">
    <div class="container">
      <img src="images/shop/advertisement.jpg" alt="" />
    </div>

    This section is for advetisement
  </section>-->
  <section>
    <div class="container">
      <div class="row">
           <div class="col-sm-1"></div>
        <div class="col-sm-10">
          
            <?php 
                            $id = $_GET['id'];
                            $query = "SELECT * FROM items where post_id = '{$id}'";
                            $res = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($res))
                            {
                              if($row['is_accepted']==0)
                              {
                                $accepted = 'The adminstration is currently verifying this post';
                              }
                              else
                              {
                                $accepted = '';
                              }
                              $sub_id = $row['subcat_id']; 
                              echo "<div class='product-details'><!--product-details-->
            <div class='col-sm-7'>
              <div class='product-information'><!--/product-information-->
                <!--<img src='assets/images/product-details/new.jpg' class='newarrival' alt='' />-->
                <span>
                  <span>{$row['name']}</span>
                </span>
                <p>Category:<b>{$row['cat_name']}</b></p>
                <p>Sub-Category:<b>{$row['subcat_name']}</b></p>
                <p>Description: <b>{$row['details']}</b></p>
                <p>Price: <b>{$row['price']} Rwf</b></p>
                <p>Seller: <b>{$row['seller']}</b></p>
                <p>Place:<b> {$row['place_name']}</b></p>
                <p>Contact number:<b> {$row['contacts']}</b></p>
                <p>Uploaded Date:<b>{$row['uploaded_date']}</b></p>
                <p>Current status:<b> {$accepted}</b></p>
                <a href=''><img src='assets/images/product-details/share.png' class='share img-responsive'  alt='' /></a>
              </div><!--/product-information-->
            </div>

            <div class='col-sm-5'>
              <div class='category-tab'><!--photo-tab-->
            <div class='col-sm-12'>
              <ul class='nav nav-tabs'>
                <li class='active'><a href='#tshirt' data-toggle='tab'>1st</a></li>
                <li><a href='#blazers' data-toggle='tab'>2nd</a></li>
                <li><a href='#sunglass' data-toggle='tab'>3rd</a></li>
                <li><a href='#kids' data-toggle='tab'>4th</a></li>
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
              </div></div>
          </div><!--/photo-tab-->
            </div>
          </div><!--/product-details-->";
                            } 
                            
                               
                        ?>



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