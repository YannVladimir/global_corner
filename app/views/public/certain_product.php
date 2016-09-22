<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Items | Get It</title>
    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
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
								<li><a href="<?php echo BASEURL; ?>upload">Sell</a></li>
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
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==3)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="3" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==3)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==4)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="4" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==4)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==5)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="5" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==5)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==6)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="6" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==6)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==7)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="7" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==7)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==8)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="8" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==8)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==9)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="9" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==9)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<?php 
                                            $cat = new Maincategory();
                                            $res = $cat->selectAllCat();
                                            while($row = mysqli_fetch_assoc($res))
                                            {
                                	          if($row['cat_id']==10)
                                	          {
                                               echo "<a data-toggle='collapse' data-parent='#accordian' href='#{$row['cat_id']}'>
											<span class='badge pull-right'><i class='fa fa-plus'></i></span>
											{$row['cat_name']}
										     </a>";
                                	          }
                                            } 
                                        ?>
										
									</h4>
								</div>
								<div id="10" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<?php 
                                              $cats = new Amacategory();
                                              $res = $cats->selectAmaCat();
                                              while($row = mysqli_fetch_assoc($res))
                                              {
                                	            if($row['refcat_id']==10)
                                	            {
                                                   echo "<li><a href='certain?id={$row['subcat_id']}'>*   {$row['subcat_name']} </a></li>";
                                                   $a = $row['cat_name'];
                                	            }
                                              }
                                              echo "<li><a href='certain?id=0'>*   All in {$a} </a></li>"; 
                                            ?>
										</ul>
									</div>
								</div>
							</div>
							
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
                        <img class='sizingimagesmax' src='/eshopper/assets/images/posts/{$row['main']}' alt=''/>
					    <div id='photo1next' class='jssora11r' style='top: 123px; right: 0px;'></div>
					    <div id='photo1prev' class='jssora11l' style='top: 123px; left: 0px;'></div>    
					</div>
								<h3>Verified</h3>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='product-information'><!--/product-information-->
								<img src='/eshopper/assets/images/product-details/new.jpg' class='newarrival' alt='' />
								<h2>{$row['name']}</h2>
								<p>{$row['details']}</p>
								<span>
									<span>{$row['price']} Rwf</span>
								</span>
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
  <script src="<?php echo BASEURL."../assets/js/bootstrap.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.scrollUp.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.prettyPhoto.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/price-range.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/main.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery-1.9.1.min.js"; ?>"></script>
    
    <script src="<?php echo BASEURL."../assets/js/docs.min.js"; ?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo BASEURL."../assets/js/ie10-viewport-bug-workaround.js"; ?>"></script>

    <!-- jssor slider scripts-->
    <!-- use jssor.slider.debug.js for debug -->
    <script type="text/javascript" src="<?php echo BASEURL."../assets/js/jssor.slider.mini.js"; ?>"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: false,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 12,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1,                                //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                    $Scale: false                                   //Scales bullets navigator or not while slider scale
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
</body>
</html>