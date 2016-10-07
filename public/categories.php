<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Categories | Get It</title>
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
     .sizingimagesmax{
        height: 190px;

      }
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
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-1">
					<div class="left-sidebar">
						
						<div class="shipping text-center"><!--shipping-->
							<br><br><br><br><br>
							<h1>place for advertisement</h1><br><br><br><br><br><br>
						</div><!--/shipping-->

                        <!--anything after shipping can be here-->

					</div>
				</div>
				
				<div class="col-sm-11 padding-right">
					<br><br>
					
					<div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
              <ul class="nav nav-tabs">
                <?php 
                                $query = "SELECT * FROM categories ";
                                $res = mysqli_query($con,$query);
                                $c = 3;
                                while($row = mysqli_fetch_assoc($res))
                                {
                                  if($row['cat_id']==$c)
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
                                $res = mysqli_query($con,$query);
                                while($r = mysqli_fetch_assoc($res))
                                { 
                                  if($r['cat_id']==$c)
                                  {
                                         echo "<div class='tab-pane fade active in' id='{$r['cat_id']}' >";
                                         $queryy = "SELECT * FROM amacategories ";
                                         $ress = mysqli_query($con,$queryy);
                                         while($row = mysqli_fetch_assoc($ress))
                                         {
                                            if($row['refcat_id']==$c)
                                            {
                                               echo "<div class='col-sm-3'>
                                                <div class='product-image-wrapper'>
                                                  <div class='single-products'>
                                                     <div class='productinfo text-center'>
                                                        <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                                                        <h4>{$row['subcat_name']}</h4>
                                                        <a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
                                                      </div>  
                                                  </div>
                                                </div>
                                                     </div>";
                                             }
                                          }
                                          echo "</div>";
                                          $c = $c+1;

                                  }
                                  else
                                  {
                                         echo "<div class='tab-pane fade in' id='{$r['cat_id']}' >";
                                         $ress = mysqli_query($con,$queryy);
                                         while($row = mysqli_fetch_assoc($ress))
                                         {
                                            if($row['refcat_id']==$c)
                                            {
                                               echo "<div class='col-sm-3'>
                  <div class='product-image-wrapper'>
                    <div class='single-products'>
                      <div class='productinfo text-center'>
                        <img class='sizingimagesmax' src='assets/images/subcategories/{$row['subcat_image']}' alt='' />
                        <h4>{$row['subcat_name']}</h4>
                        <a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
                      </div>  
                    </div>
                  </div>
                </div>";
                                             }
                                          }
                                          echo "</div>";
                                          $c = $c+1;
                                  }
                                }
                                 
                              ?>
              
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
</body>
</html>
