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
    <link rel="shortcut icon" href="assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
        
        .fon{
        font-size: 20px;
      }
    
        .sizingimagesmax{
          padding: 37px;

        }
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
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="home.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="categories.php" class="active fon">Buy</a></li>
                <li><a href="orders.php" class="fon">Orders</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box">
                          <form action='search_results.php' method='GET'>
                            <input type="text" name='k'  required="required" class="searchtext col-sm-10" placeholder="Search"/>
                            <button type="submit" class="btn btn-default col-sm-2 bton"><i class="fa fa-search"></i></button>
                          </form>
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
              <div class='view-product'>
                    <div class='' id='photo1'>
                        <img class='sizingimagesmax' src='assets/images/posts/{$row['main']}' alt=''/></div>
              <div id='photo1next' class='jssora11r' style='top: 123px; right: 0px;'></div>
           <div class='displaynone' id='photo2'>
            <img class='sizingimagesmax' src='assets/images/posts/{$row['photo1']}' alt=''/></div>
            <div id='photo2prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>    
            <div id='photo2next' class='jssora11r' style='top: 123px; display:none; right: 0px;'></div>
            <div class='displaynone' id='photo3'>
            <img class='sizingimagesmax' src='assets/images/posts/{$row['photo2']}' alt=''/></div>
            <div id='photo3prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>
            <div id='photo3next' class='jssora11r' style='top: 123px; display:none; right: 0px;'></div>
                <div class='displaynone' id='photo4'>
            <img class='sizingimagesmax' src='assets/images/posts/{$row['photo3']}' alt=''/></div>
            <div id='photo4prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>  
            <div id='photo4next' class='jssora11r' style='top: 123px; display:none; right: 0px;'></div>
            <div class='displaynone' id='photo5'>
            <img class='sizingimagesmax' src='assets/images/posts/{$row['photo4']}' alt=''/></div>
            <div id='photo5prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>
                <h3>Verified</h3>
              </div>
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
 
    <script type="text/javascript">
  $(document).ready(function()
  {
      $("#photo1next").click(function()
			  {

                  $("#photo1next").fadeOut(1);
                  $("#photo1").fadeOut(1);
			      $("#photo2").slideToggle();
                  $("#photo2prev").fadeIn();
                  $("#photo2next").fadeIn();
			  });
      $("#photo2prev").click(function()
			  {
			  	   
                  $("#photo2prev").fadeOut(1);
                  $("#photo2next").fadeOut(1);
                  $("#photo2").fadeOut(1);
			      $("#photo1").slideToggle();
                  $("#photo1next").fadeIn();
			  });
      $("#photo2next").click(function()
        {

                  $("#photo2next").fadeOut(1);
                  $("#photo2prev").fadeOut(1);
                  $("#photo2").fadeOut(1);
            $("#photo3").slideToggle();
                  $("#photo3prev").fadeIn();
                  $("#photo3next").fadeIn();
        });
      $("#photo3prev").click(function()
        {
             
                  $("#photo3prev").fadeOut(1);
                  $("#photo3next").fadeOut(1);
                  $("#photo3").fadeOut(1);
                  $("#photo2").slideToggle();
                  $("#photo2next").fadeIn();
                  $("#photo2prev").fadeIn();
        });
      $("#photo3next").click(function()
        {

                  $("#photo3next").fadeOut(1);
                  $("#photo3prev").fadeOut(1);
                  $("#photo3").fadeOut(1);
                  $("#photo4").slideToggle();
                  $("#photo4prev").fadeIn();
                  $("#photo4next").fadeIn();
        });
      $("#photo4prev").click(function()
        {
             
                  $("#photo4prev").fadeOut(1);
                  $("#photo4next").fadeOut(1);
                  $("#photo4").fadeOut(1);
                  $("#photo3").slideToggle();
                  $("#photo3next").fadeIn();
                  $("#photo3prev").fadeIn();
        });
      $("#photo4next").click(function()
        {

                  $("#photo4next").fadeOut(1);
                  $("#photo4prev").fadeOut(1);
                  $("#photo4").fadeOut(1);
                  $("#photo5").slideToggle();
                  $("#photo5prev").fadeIn();
        });
      $("#photo5prev").click(function()
        {
             
                  $("#photo5prev").fadeOut(1);
                  $("#photo5next").fadeOut(1);
                  $("#photo5").fadeOut(1);
                  $("#photo4").slideToggle();
                  $("#photo4next").fadeIn();
                  $("#photo4prev").fadeIn();
        });
      
  });
   </script>
</body>
</html>