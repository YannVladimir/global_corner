<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Contact us</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
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
                <li><a href="categories.php" class="fon">Buy</a></li>
                <li class="dropdown"><a href="#">Odering<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu"> 
                        <li><a href="order.php" class="fon">Make order</a></li>
                        <li><a href="orders.php" class="fon">View orders</a></li> 
                    </ul>
                </li>
                <li><a href="contact_us.php" class="active fon">Contact us</a></li>
                
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
                            if(isset($_SESSION['id']))
                            {
                                echo "<form action='message.php' id='contactform' class='contact-form row' method='POST'>
				                <div class='form-group col-md-12'>
				                <input type='text' name='subject' class='form-control'  placeholder='Subject'>
				                </div>
				                <div class='form-group col-md-12'>
				                <textarea name='message' id='message'  class='validate[required] form-control' rows='8' placeholder='Your Message Here'></textarea>
				                </div>                        
				                <div class='form-group col-md-12'>
				                ";
                            }
                            else 
                            {
                                 echo "<form action='message.php' id='contactform' class='contact-form row' name='contactform' method='POST'>
				                 <div class='form-group col-md-12'>
				                 <input type='text' name='name' class='form-control' required='required' onlyLetterSp='onlyLetterSp' placeholder='Full Name'>
				                 </div>
				                 <div class='form-group col-md-6'>
				                 <input type='text' name='number' class='form-control' required='required' integer='integer' placeholder='Contact number'>
				                 </div>
				                 <div class='form-group col-md-6'>
				                 <input type='email' name='email' class='form-control' required='required' email='email' placeholder='Email address'>
				                 </div>
				                 <div class='form-group col-md-12'>
				                 <input type='text' name='subject' class='form-control' placeholder='Subject'>
				                 </div>
				                 <div class='form-group col-md-12'>
				                 <textarea name='message' id='message'  class='form-control'  required='required' rows='8' placeholder='Your Message Here'></textarea>
				                 </div>                        
				                 <div class='form-group col-md-12'>
				                 ";
                            }
                        ?>
                        <input type="text" class='hidden' name="_token" value="<?php echo $_SESSION['_token']; ?>">
				    	<input type='submit' name='submit' class='btn btn-primary pull-right' value='Submit'>
				                 
				    	</div>
				                 </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>250trade</p>
							<p>Kigali, Kicukiro, Kigarama</p>
							<p>Mobile: +250782767289</p>
							<p>Email: bajenezayann549@gmail.com</p>
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
    </div><!--/#contact-pa ge-->
	
	<br><br><br>
  <?php  
   require('footer.php');    
  ?>

    <script src="assets/js/jquery.js" type="text/javascript"></script>
    <script src="assets/js/yann.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.scrollUp.min.js" type="text/javascript"></script>
	<script src="assets/js/price-range.js" type="text/javascript"></script>
    <script src="assets/js/jquery.prettyPhoto.js" type="text/javascript"></script><!--
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<akaboroakaborophp echo BASEURL."../assets/js/gmaps.js"></script>  
  <script src="<php echo BASEURL."../assets/js/contact.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/contactus.js"></script>
    <script src="assets/jQuery-Validation-Engine-master/js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
--><script src="assets/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</html>