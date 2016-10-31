<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
if (isset($_POST['done']))
{
	answer_log_user_in($_POST['email'],$_POST['password']); 
}
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade/Login</title>
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
     .fon{
      	font-size: 20px;
      }
    .message{
      background-color: #3AACEB;
      color:white;
      font-size: 17px;
    }
    </style>
</head><!--/head-->

<body>
	<?php  
    include('header.php');   
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
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
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
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
        <div class="col-sm-12">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 message text-center"><?php
                        if(isset($_SESSION['message']))
                        {
                          echo "<div class='msg'>";
                                 echo '<p>'.$_SESSION['message'].'</p>';
                                 unset($_SESSION['message']);                         
                          echo "</div>";
                        }
          ?></div>
        </div>
				<div class="col-sm-4 col-sm-offset-1">
					
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="login.php" method="POST">
							<input type="email" placeholder="Email Address" required="required" email="email" name="email" />
							<input type="password" placeholder="password" required="required" name="password" />
							<!--<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>-->
							<input type="text" class='hidden' name="_token" value="<?php echo $_SESSION['_token']; ?>">
							<button type="submit" name="done" class="btn btn-default bton">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="sign_up.php" method="POST">
							<input type="text" placeholder="First name" required="required" name="firstname"/>
							<input type="text" placeholder="Last name" required="required" name="lastname"/>
							<input type="text" placeholder="Contact number" required="required" digits="true" name="phone"/>
							<input type="email" placeholder="Email Address" required="required" email="eamil" name="email"/>
							<input type="password" placeholder="Password" required="required" name="password"/>
							<input type="password" placeholder=" Re-type Password" required="required" equalTo="password" name="repassword"/>
							<input type="text" class='hidden' name="_token" value="<?php echo $_SESSION['_token']; ?>">
							<button type="submit" class="btn btn-default bton">Signup</button>
						    <br>
                              By signing-up you agree with our <a href='terms-of-use.php' target='blank' style='color=#3AACEB'>Terms of use </a>
              
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<br><br><br><br><br>
	<?php  
      include('footer.php');    
  ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
</body>
</html>