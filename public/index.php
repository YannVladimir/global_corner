<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Get It</title>
    <link href="<?php echo BASEURL."assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."assets/css/yann.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."assets/css/prettyPhoto.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."assets/css/price-range.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."assets/css/animate.css"; ?>" rel="stylesheet">
	<link href="<?php echo BASEURL."assets/css/main.css"; ?>" rel="stylesheet">
	<link href="<?php echo BASEURL."assets/css/responsive.css"; ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->   
    <link rel="shortcut icon" href="<?php echo BASEURL."assets/images/ico/favicon.ico"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASEURL."assets/images/ico/apple-touch-icon-144-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASEURL."assets/images/ico/apple-touch-icon-114-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASEURL."assets/images/ico/apple-touch-icon-72-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo BASEURL."assets/images/ico/apple-touch-icon-57-precomposed.png"; ?>">
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
								<li><a href="<?php echo BASEURL; ?>home" class="active">Home</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>upload_electronics">Sell</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>categories">Buy</a></li>
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
	
	
	<?php  
      require(BASEPATH.'app/views/public/slider.php');    
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
                                $cat = new Maincategory();

                                $res = $cat->selectAllCat();
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
                                $res1 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res1))
                                {
                                	if($row['cat_id']==3)
                                	{
                                         echo "<div class='tab-pane fade active in' id='{$row['cat_id']}' >";
                                	}
                                }
                                $cats = new Amacategory();
                                $res = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res))
                                {
                                	if($row['refcat_id']==3)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                                echo "</div>";
                                $res2 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res2))
                                {
                                	if($row['cat_id']==4)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                                $res3 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res3))
                                {
                                	if($row['refcat_id']==4)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                                echo "</div>";
                                $res4 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res4))
                                {
                                	if($row['cat_id']==5)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                            
                                $res5 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res5))
                                {
                                	if($row['refcat_id']==5)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                              echo "</div>";
                                $res6 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res6))
                                {
                                	if($row['cat_id']==6)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                            
                                $res7 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res7))
                                {
                                	if($row['refcat_id']==6)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                              echo "</div>";
                                $res8 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res8))
                                {
                                	if($row['cat_id']==7)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                }
                                $res9 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res9))
                                {
                                	if($row['refcat_id']==7)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                              echo "</div>";
                                $res10 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res10))
                                {
                                	if($row['cat_id']==8)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                              
                                $res11 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res11))
                                {
                                	if($row['refcat_id']==8)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                              echo "</div>";
                                $res12 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res12))
                                {
                                	if($row['cat_id']==9)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                            
                                $res13 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res13))
                                {
                                	if($row['refcat_id']==9)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>
												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
											</div>	
										</div>
									</div>
								</div>";
                                	}
                                } 
                              echo "</div>";
                                $res14 = $cat->selectAllCat();
                                while($row = mysqli_fetch_assoc($res14))
                                {
                                	if($row['cat_id']==10)
                                	{
                                         echo "<div class='tab-pane fade' id='{$row['cat_id']}' >";
                                	}
                                } 
                              
                                $res15 = $cats->selectAmaCat();
                                while($row = mysqli_fetch_assoc($res15))
                                {
                                	if($row['refcat_id']==10)
                                	{
                                         echo "<div class='col-sm-3'>
									<div class='product-image-wrapper'>
										<div class='single-products'>
											<div class='productinfo text-center'>

												<img class='sizingimagesmax' src='/eshopper/assets/images/subcategories/{$row['subcat_image']}' alt='' />
												<h4>{$row['subcat_name']}</h4>
												<a href='certain?id={$row['subcat_id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>Visit Category</a>
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
      require(BASEPATH.'app/views/public/footer.php');    
    ?>
    <script src="<?php echo BASEURL."assets/js/jquery.js"; ?>"></script>
    <script src="<?php echo BASEURL."assets/js/yann.min.js"; ?>"></script>
	<script src="<?php echo BASEURL."assets/js/jquery.scrollUp.min.js"; ?>"></script>
	<script src="<?php echo BASEURL."assets/js/price-range.js"; ?>"></script>
    <script src="<?php echo BASEURL."assets/js/jquery.prettyPhoto.js"; ?>"></script>
	<script src="<?php echo BASEURL."assets/js/main.js"; ?>"></script>
</body>
</html>