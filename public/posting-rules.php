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
              <h2 class="title text-center">Posting rules</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  <p>
                  	<h3 class="title">250TRADE'S AD LISTING POLICIES ARE INTENDED TO:</h3>
                  	<ol>
                  		<li>Support government laws and regulations</li>
                        <li>Minimize risks to both traders</li>
                        <li>Provide equal opportunity to all traders</li>
                        <li>Protect intellectual property rights</li>
                        <li>Provide an easy and enjoyable trade experience</li>
                        <li>Support the values of the 250trade Community</li>
                    </ol><br>
                  <p>
                  	<h2 class="title text-center">It' s a must for every seller to know and follow:</h2>
                    <ol>
                  		<li><h3 class="title">Rules about prohibited and restricted items</h3>
                           <ol>
                             <li>Alcohol</li>
                             <li>Adoption of Children & Babies</li>
                             <li>Pornographic Material</li>
                             <li>Animals for fight/race</li>
                             <li>Blood, Bodily Fluids and Body Parts</li>
                             <li>Embargoed Goods</li>
                             <li>Event Tickets</li>
                             <li>Fireworks, Explosives and Explosive Substances</li>
                             <li>Government IDs and Licenses</li>
                             <li>Hospital equipment and general aesthetic</li>
                             <li>Human Parts and Remains</li>
                             <li>Illegal Drugs</li>
                             <li>Items that hurt the Laws for the Protection of Historical, Artistic and Cultural significance</li>
                             <li>Pharmaceutical products (prescribed or not)</li>
                             <li>Photos of artists/singers/entertainers are not allowed unless with permit</li>
                             <li>Police, Army, Navy and Air force Related Items</li>
                             <li>Political</li>
                             <li>Tobacco Products</li>
                             <li>Event Tickets</li>
                             <li>Ultrasound machines</li>
                             <li>Unrealistic price and other offers</li>
                             <li>Used Cosmetics</li>
                             <li>Used Undergarments</li>
                             <li>Weapons & Knives</li>
                             <li>Wildlife Products - mounted specimens, and ivory</li>
                             <li>Wholesale/Bulk selling of Branded Products (Electronic Items/Mobiles)</li>
                           </ol>
                  		</li>
                        <li><h3 class="title">Rules about intellectual property</h3>
                              The following items are restricted or prohibited because they would potentially infringe on intellectual property rights:
                           <ol>
                             <li>Counterfeit items</li>
                             <li>Faces, names and signatures and autographed items</li>
                             <li>Software & movie piracy</li>
                             <li>Watermark/logo/URL of other websites</li>
                             <li>New Luxury brands</li>
                             
                           </ol>
                        </li>
                        <li><h3 class="title">Actions that are not allowed in listing product for sale</h3>
                           To promote a safe, fair and enjoyable experience, 250trade has established a set of rules and policies for item listings. You are requested, not to:
                           <ol>
                             <li>Post Duplicate Ad listings</li>
                             <li>Post Mature Audience/Sexually oriented material</li>
                             <li>Write Misleading Titles</li>
                             <li>Upload Inappropriate/wrong picture with the Ad</li>
                             <li>List items in inappropriate categories</li>
                             <li>Misrepresent the item location</li>
                             <li>Quote Unrealistic Price</li>
                           </ol>
                        </li>
                        <li><h3 class="title">Miscellaneous info - Your listing, information, Advertisement</h3>
                           <ol>
                             <li>Shall not be defamatory, trade libelous, unlawfully threatening or unlawfully harassing. Further shall not be fraudulent, misrepresenting, misleading or pertain to the sale of any illegal, stolen goods and or services which do not belong to you or you do not have the authority for.</li>
                             <li>Shall not contain any viruses, Trojan horses, worms or other computer programmes that may damage, detrimentally interfere with, surreptitiously intercept or expropriate any system, data or personal information.</li>
                             <li>Shall not be allowed to libel anyone or include hate, derogatory, slanderous speech directed at individuals or groups. You should not advocate violence against other users or individuals or groups.</li>
                             
                           </ol>
                        </li>
                        <li><h3 class="title">Consequences of Breach of Listing Policy</h3>
                            Users who violate the prohibited items policy and or the restricted items policy may be subject to the following actions
                            <ol>
                             <li>Permanent blacklisting from 250trade community</li>
                             <li>Reporting to Law Enforcement or Appropriate Authorities</li>
                           </ol>
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
