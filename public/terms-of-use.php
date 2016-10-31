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
    <title>250 Trade | Upload item</title>
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
      .this{
        color: white;
      }
      .hide{
            display: none;  }
      .starting{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border:3px;
      }
      
      .btnlocation{
        cursor: pointer;
        background: url("assets/images/upload.jpg")center center no-repeat;
        width:180px;
        height: 150px;
        border-style: none;
      }
      .notshowing{
        display: none;
      }
      #optionss{
        z-index: 1;
        position: absolute;
        background: white;
        border: 1px;
        border-style: solid;
        border-top-width: 0px;
        border-right-width: 0px;
        border-color: #b7c1c6;
      }
      .optionhover{
        cursor: pointer;
        display: block;
        background: white;
      }
      .optionhover label:hover{
        background: blue;
        color:white;
      }
      .ff{
        float: right;
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
              <ul class="nav navbar-nav ">
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
  <!--/header-->

  <section id="cart_items">
    <div class="container">
          <div class="col-sm-2"></div>
        <div class="col-sm-8 padding-right">
            <div class="contact-form align-center">
              <br>
              <h2 class="title text-center">Terms of use</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  <h3 class="title">Description of service and content policy</h3>
                           <ol>
                             <li>250Trade is the next generation of online classifieds. 
                             	We act as a venue to allow our users who comply with these Terms to offer, 
                             	sell, and buy products and services listed on the Platform. 
                             	As a result, and as discussed in more detail in these Terms, 
                             	you hereby acknowledge and agree that 250Trade  
                             	has no control over any element or any transaction, 
                             	and shall have no liability to any party in connection with such transactions. 
                             	You use the Platform at your own risk.
                             </li>

                             <li>You understand that 250Trade does not control, 
                             	and is not responsible for ads, directory information,
                                 business listings/information, messages between users,
                             	including without limitation e-mails sent from outside 250trade’s 
                             	domain or other means of electronic communication, 
                             	whether through the Platform or another Third Party Website (defined below) 
                             	or offerings, comments, user postings, files, images, photos, video, sounds,
                             	 business listings/information and directory information or any other material
                             	  made available through the Platform and the Service ("Content"), 
                             	  and that by using the Platform and the Service, you may be exposed to Content
                             	   that is offensive, indecent, inaccurate, misleading, or otherwise objectionable. 
                             	   You acknowledge and agree that you are responsible for and must evaluate, 
                             	   and bear all risks associated with, the use of any Content, 
                             	   that you may not rely on said Content, and that under no circumstances will 250Trade
                             	    be liable in any way for the Content or for any loss or damage of any 
                             	    kind incurred as a result of the browsing, using or reading any Content
                             	     listed, e-mailed or otherwise made available via the Service. 
                             	     You acknowledge and agree that 250Trade cannot and does not pre-screen 
                             	     or approve any Content, but that 250Trade has the right, 
                             	     in its sole and absolute discretion, to refuse, delete or move any 
                             	     Content that is or may be available through the Service, 
                             	     for violating these Terms and such violation being brought to 250Trade’s
                             	      knowledge or for any other reason or no reason at all. 
                             	      Furthermore, the Platform and Content available through the Platform may 
                             	      contain links to other third party websites ("Third Party Websites"), 
                             	      which are completely unrelated to 250Trade.
                             	       If you link to Third Party Websites, you may be subject to those
                             	        Third Party Websites’ terms and conditions and other policies. 
                             	        250Trade makes no representation or guarantee as to the accuracy
                             	         or authenticity of the information contained in any such Third Party Website,
                             	          and your linking to any other websites is completely at your own risk and 250Trade
                             	           disclaims all liability thereto.
                             </li>
                             <li>You acknowledge and agree that you are solely responsible for your own 
                             	Content posted on, transmitted through, or linked from the Service and 
                             	the consequences of posting, transmitting, linking or publishing it. 
                             	More specifically, you are solely responsible for all Content that you 
                             	upload, email or otherwise make available via the Service. 
                             	In connection with such Content posted on, transmitted through, or linked 
                             	from the Service by you, you affirm, acknowledge, represent, warrant and 
                             	covenant that: (i) you own or have and shall continue to, for such time 
                             	the Content is available on the Platform, have the necessary licenses, 
                             	rights, consents, and permissions to use such Content on the Service and 
                             	Platform (including without limitation all patent, trademark, trade secret, 
                             	copyright or other proprietary rights in and to any and all such Content) 
                             	and authorize 250Trade to use such Content to enable inclusion and use of the 
                             	Content in the manner contemplated by the Service, the Platform and these 
                             	Terms; and (ii) you have the written consent, release, and/or permission of 
                             	each and every identifiable individual person or business in the Content to 
                             	use the name or likeness of each and every such identifiable individual 
                             	person or business to enable inclusion and use of the Content in the manner 
                             	contemplated by the Service, the Platform and these Terms. For clarity, you 
                             	retain all of your ownership rights in your Content; however, by submitting 
                             	any Content on the Platform, you hereby grant to 250Trade an irrevocable, 
                             	non-cancellable, perpetual, worldwide, non-exclusive, royalty-free, 
                             	sub-licensable, transferable license to use, reproduce, distribute, 
                             	prepare derivative works of, display, and perform the Content in connection 
                             	with the Platform and 250Trade's (and its successors') business, including 
                             	without limitation for the purpose of promoting and redistributing part or 
                             	all of the Platform and Content therein (and derivative works thereof) in 
                             	any media formats and through any media channels now or hereafter known. 
                             	These rights are required by 250Trade in order to host and display your 
                             	Content. Furthermore, by you posting Content to any public area of the 
                             	Service, you agree to and do hereby grant to 250Trade all rights necessary 
                             	to prohibit or allow any subsequent aggregation, display, copying, 
                             	duplication, reproduction, or exploitation of the Content on the Service 
                             	or Platform by any party for any purpose. As a part of the Service, 250Trade 
                             	may offer the facility of automatically capturing of the "Description" of 
                             	your ad based on the images uploaded by you. 250Trade makes no warranty 
                             	the veracity or the accuracy of the generated Description. 
                             	The Description may be edited by you at any time while your ad is live. 
                             	You also hereby grant each user of the Platform (a) a non-exclusive 
                             	license to access your Content through the Platform; and (b) the right 
                             	to contact you with regard to the Content posted by you through private 
                             	chat or any other means. The foregoing license to each user granted by 
                             	you terminates once you or 250Trade remove or delete such Content from 
                             	the Platform. Further, you grant 250Trade the right to make available 
                             	your Content to any third party in connection with the transaction 
                             	contemplated in your classified advertisement.
                             </li>
                            </ol>
                  		
            </div>
          </div>
                <div class="col-sm-3 padding-right"><!--for advertisement--></div> 
    </div>
  </section> <!--/#cart_items-->

  

  <br><br><br>
   <?php  
      require('footer.php');    
  ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/uploading.js"></script>
  <script src="assets/js/image.upload.js"></script>
</body>
</html>
