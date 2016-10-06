<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Posting | Global Conner</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
								<li><a></a></li>
								<li><a href="globalhome.php">Home</a></li>
								<li><a></a></li><li><a></a></li>
								<li><a href="upload.php">Auction</a></li>
								<li><a></a></li><li><a></a></li>
								<li><a href="upload.php" class="active">Sell an item</a></li>
								<li><a></a></li><li><a></a></li>
								<li><a href="categories.php">Categories</a></li>
								<li><a></a></li><li><a></a></li>
								<li><a href="contact-us.php">Contact us</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box">
							<input type="text" class="searchtext col-sm-10" placeholder="Search"/>
							<button type="submit" class="btn btn-default col-sm-2 "><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<!--/header-->

	<section id="cart_items">
		<div class="container">
			    <div class="col-sm-3"></div>
				<div class="col-sm-6 padding-right">
	    			<div class="contact-form align-center">
	    				<br>
	    				<h2 class="title text-center">Enter Ad's Details</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="" class="upload-form row" name="upload-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="title" class="form-control" required="required" placeholder="Ad Title">
				            </div>
				            <div class="form-group col-md-6">
				                <select name="category" class="form-control" required="required">
				                	<option>
				                		<button type="button" class="btn btn-default dropdown-toggle category" data-toggle="dropdown_category">
									    Select Your Country
									    <span class="caret"></span>
								        </button>
							        </option>
							        <ul class="dropdown_category-menu">
									    <li><a href="#"><option value="mobiles">Mobiles</option></a></li>
									    <li><a href="#"><option value="electronics">Electronics</option></a></li>
									    <li><a href="#"><option value="furnitures">Furnitures</option></a></li>
									    <li><a href="#"><option value="real estates">Real Estates</option></a></li>
									    <li><a href="#"><option value="cars & bikes">Cars & Bikes</option></a></li>
								        <li><a href="#"><option value="sports $ hobbies">Sports $ Hobbies</option></a></li>
                                        <li><a href="#"><option value="jobs">Jobs</option></a></li>
                                    </ul>
                                </select>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Ad Description, Include the brand, model, age and any other included accessories"></textarea>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="details" id="message" required="required" class="form-control" rows="4" placeholder="This side will be for uploading photos"></textarea>
				            </div> 
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Saler Name">
				            </div> 
				            <div class="form-group col-md-6">
				                <input type="text" name="contact" class="form-control" required="required" placeholder="Phone Number">
				            </div> 
				            <div class="form-group col-md-12">
				                <input type="text" name="location" class="form-control" required="required" placeholder="Your Location">
				            </div>                    
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
                <div class="col-sm-3 padding-right"><!--for advertisement--></div> 
		</div>
	</section> <!--/#cart_items-->

	

	<br><br><br><br><br><br>
	<?php  
      require('footer.php');    
    ?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>