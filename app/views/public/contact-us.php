<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact us| Get It</title>
    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/css/yann.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/prettyPhoto.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/price-range.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/animate.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/main.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/responsive.css"; ?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo BASEURL."../assets/images/ico/favicon.ico"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-144-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-114-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-72-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-57-precomposed.png"; ?>">

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
								<li><a href="<?php echo BASEURL; ?>categories">Buy</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>contact_us" class="active">Contact us</a></li>
								
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
	
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<!--<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					later ninshaka gushyiraho map ni hano nzayishyira tu
					</div>-->
				<!-- iyi divi ihita ijya hejuru ya form, then nzashyiramo map-->	
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<?php
                            if($_SESSION)
                            {
                                echo "<form action='message/create' id='contactform' class='contact-form row' name='contactform' method='post'>
				                <div class='form-group col-md-12'>
				                <input type='text' name='subject' class='form-control'  required='required' placeholder='Subject'>
				                </div>
				                <div class='form-group col-md-12'>
				                <textarea name='message' id='message'  class='form-control' required='required' rows='8' placeholder='Your Message Here'></textarea>
				                </div>                        
				                <div class='form-group col-md-12'>
				                <input type='submit' name='submit' class='btn btn-primary pull-right' value='Submit'>
				                </div>
				                </form>";
                            }
                            else
                            {
                                 echo "<form action='message/create' id='contactform' class='contact-form row' name='contactform' method='post'>
				                 <div class='form-group col-md-12'>
				                 <input type='text' name='name' class='form-control' required='required' placeholder='Full Name'>
				                 </div>
				                 <div class='form-group col-md-6'>
				                 <input type='text' name='number' class='form-control' required='required' placeholder='Contact number'>
				                 </div>
				                 <div class='form-group col-md-6'>
				                 <input type='email' name='email' class='form-control'  email='email' placeholder='Email'>
				                 </div>
				                 <div class='form-group col-md-12'>
				                 <input type='text' name='subject' class='form-control' required='required' placeholder='Subject'>
				                 </div>
				                 <div class='form-group col-md-12'>
				                 <textarea name='message' id='message'  class='form-control' required='required' rows='8' placeholder='Your Message Here'></textarea>
				                 </div>                        
				                 <div class='form-group col-md-12'>
				                 <input type='submit' name='submit' class='btn btn-primary pull-right' value='Submit'>
				                 </div>
				                 </form>";
                            }
                        ?>
				    	
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>Global Corner</p>
							<p>Ramamandi, new joginder nagar street 2, house 220</p>
							<p>Jalandhar, punjab, india</p>
							<p>Mobile: +9156148414</p>
							<p>Fax: none</p>
							<p>Email: globalconner@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<br><br><br>
  <?php  
   require(BASEPATH.'app/views/public/footer.php');    
  ?>
  <script src="<?php echo BASEURL."../assets/js/jquery.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/yann.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.scrollUp.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.prettyPhoto.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/main.js"; ?>"></script><!--
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<akaboroakaborophp echo BASEURL."../assets/js/gmaps.js"; ?>"></script>  
  <script src="<php echo BASEURL."../assets/js/contact.js"; ?>"></script>-->
  <script src="<?php echo BASEURL."../assets/js/jquery.validate.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/contactus.js"; ?>"></script>
</body>
</html>