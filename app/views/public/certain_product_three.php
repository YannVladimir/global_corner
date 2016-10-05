<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Items | Get It</title>
    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/css/yann.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/prettyPhoto.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/price-range.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/animate.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/main.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/responsive.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/slider.css"; ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo BASEURL."../assets/images/ico/favicon.ico"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-144-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-114-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-72-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-57-precomposed.png"; ?>">
    <style type="text/css">
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
                    background: url(/eshopper/assets/images/slider/a11.png) no-repeat;
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
    require(BASEPATH.'app/views/public/header.php');   
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
								<li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>home">Home</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>upload_electronics">Sell</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>categories" class="active">Buy</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>contact_us">Contact us</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box">
              <form action='/eshopper/public/results' method='GET'>
              <input type="text" name='k' class="searchtext col-sm-10" placeholder="Search"/>
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
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php 
                                            $cat = new Maincategory();
                                            $cats = new Amacategory();
                                            $c = 3;
                                            $res = $cat->selectAllCat();
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
                    $re = $cats->selectAmaCat();
                    while($ro = mysqli_fetch_assoc($re))
                                              {
                                              if($ro['refcat_id']==$c)
                                              {
                                                   echo "<li><a href='certain?id={$ro['subcat_id']}'>*   {$ro['subcat_name']} </a></li>";
                                                   
                                              }
                                              }
                                              
                                            }
                                            $c = $c+1;
                                            echo "<li><a href='certain?id=0'>*   All in {$a} </a></li></ul>
                  </div>
                </div>
              </div>";
                                            
                                            } 
                                        ?>
						</div><!--/category-productsr-->
						
						
						<div class="shipping text-center"><!--shipping-->

							<img src="<?php echo BASEURL."../assets/images/home/shipping.jpg"; ?>" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					
						<?php 
                            $id = $_GET['id'];
                            $b = new Items();
                            $res = $b->selectItem($id);
                            while($row = mysqli_fetch_assoc($res))
                            {
                            	$sub_id = $row['subcat_id']; 
                              echo "<div class='product-details'><!--product-details-->
						<div class='col-sm-6'>
							<div class='view-product'>
										<div class='' id='photo1'>
                        <img class='sizingimagesmax' src='/eshopper/assets/images/posts/{$row['main']}' alt=''/></div>
					    <div id='photo1next' class='jssora11r' style='top: 123px; right: 0px;'></div>
					 <div class='displaynone' id='photo2'>
						<img class='sizingimagesmax' src='/eshopper/assets/images/posts/{$row['photo1']}' alt=''/></div>
						<div id='photo2prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>    
					  <div id='photo2next' class='jssora11r' style='top: 123px; display:none; right: 0px;'></div>
            <div class='displaynone' id='photo3'>
            <img class='sizingimagesmax' src='/eshopper/assets/images/posts/{$row['photo2']}' alt=''/></div>
            <div id='photo3prev' class='jssora11l' style='top: 123px; display:none; left: 0px;'></div>
								<h3>Verified</h3>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='product-information'><!--/product-information-->
								<img src='/eshopper/assets/images/product-details/new.jpg' class='newarrival' alt='' />
								<span>
                  <span>{$row['name']}</span>
                </span>
                <p>{$row['details']}</p>
                <h2>{$row['price']} Rwf</h2>
								<p>Seller: <b>{$row['seller']}</b></p>
								<p>Place:<b> {$row['place_name']}</b></p>
								<p>Contact number:<b> {$row['contacts']}</b></p>
								<p>Uploaded Date:<b>{$row['uploaded_date']}</b></p>
								<a href=''><img src='/eshopper/assets/images/product-details/share.png' class='share img-responsive'  alt='' /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->";
                            } 
                            echo"<div class='recommended_items'><!--recommended_items-->
						<h2 class='title text-center'>recommended items</h2>
						
						<div id='recommended-item-carousel' class='carousel slide' data-ride='carousel'>
							<div class='carousel-inner'>
								<div class='item active'>"; 
                            $res1 = $b->selectRecomendedItems($sub_id,$id);
                            while($row = mysqli_fetch_assoc($res1))
                            {
                            	{
                            		echo"
                            		<div class='col-sm-3'>
										<div class='product-image-wrapper'>
											<div class='single-products'>
												<div class='productinfo text-center'>
													<img src='/eshopper/assets/images/posts/{$row['main']}' alt='' />
													<h2>{$row['price']}</h2>
													<p>{$row['name']}</p>
										            <a href='product?id={$row['post_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View item</a>
												</div>
											</div>
										</div>
									</div>";
                            	}
               
								
                            }
                               
                        ?>
                    			
						</div>
					</div><!--/recommended_items-->
					
				</div>
						
				
			</div>
		</div>
	</section>
	
	<br><br><br><br>
	<?php  
      require(BASEPATH.'app/views/public/footer.php');    
    ?>
  <script src="<?php echo BASEURL."../assets/js/jquery.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/yann.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.scrollUp.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.prettyPhoto.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/price-range.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/main.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery-1.9.1.min.js"; ?>"></script>
 
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
        });
      $("#photo3prev").click(function()
        {
             
                  $("#photo3prev").fadeOut(1);
                  $("#photo3").fadeOut(1);
            $("#photo2").slideToggle();
                  $("#photo2next").fadeIn();
                  $("#photo2prev").fadeIn();
        });
      
  });
   </script>
</body>
</html>