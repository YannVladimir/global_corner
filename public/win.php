<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | About us</title>
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
    <link rel="shortcut icon" href="assets/images/ico/icon.ico">
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
                <li><a href="home.php" class="active">Home</a></li>
                <li><a href="upload.php" class="fon">Post your ad</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="categories.php" class="fon">Products</a></li>
                <li><a href="services.php" class="fon">Services</a></li>
                <li><a href="orders.php" class="fon">Orders</a></li>
                       
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

  <section id="cart_items">
    <div class="container">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6 padding-right">
            <div class="contact-form align-center">
              <br>
              <h2 class="title text-center">Win LGK</h2>
              
              <p class="text-center">
                 Win a new LGK smartphone with 250trade.com, the best free Rwandan classifieds site. </p>
              <br><br>
              <p class="text-center">
               <b>How to win:<b> 
                <ol>
                  <li>Create your own store</li>
                  <li>Post an ad for free to get your first chance </li>
               </ol> </p>
              <br><br>
              <p class="text-center">
               <b>What can be posted:<b> 
                <ol>
                  <li>Sell anything from used mobiles, furniture, laptops, houses and more by submitting ads for free</li>
                  <li>Publish any service you provide (eg: Sonorization, Plumbing, car-rent, etc..) for free </li>
               </ol> </p>
              <br><br>
              <p class="text-center">
               <b>Time left for first prizes:<b> 
                <script language="JavaScript">
              TargetDate = "02/15/2017 00:00 AM";
BackColor = "white";
ForeColor = "#3AACEB";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "<br>Time left: %%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
FinishMessage = "Make rwanda know what you trade";
function calcage(secs, num1, num2) {
  s = ((Math.floor(secs/num1))%num2).toString();
  if (LeadingZero && s.length < 2)
    s = "0" + s;
  return "<b>" + s + "</b>";
}

function CountBack(secs) {
  if (secs < 0) {
    document.getElementById("cntdwn").innerHTML = FinishMessage;
    return;
  }
  DisplayStr = DisplayFormat.replace(/%%D%%/g, calcage(secs,86400,100000));
  DisplayStr = DisplayStr.replace(/%%H%%/g, calcage(secs,3600,24));
  DisplayStr = DisplayStr.replace(/%%M%%/g, calcage(secs,60,60));
  DisplayStr = DisplayStr.replace(/%%S%%/g, calcage(secs,1,60));

  document.getElementById("cntdwn").innerHTML = DisplayStr;
  if (CountActive)
    setTimeout("CountBack(" + (secs+CountStepper) + ")", SetTimeOutPeriod);
}

function putspan(backcolor, forecolor) {
 document.write("<span id='cntdwn' style='font-size:18px; background-color:" + backcolor + 
                "; color:" + forecolor + "'></span>");
}

if (typeof(BackColor)=="undefined")
  BackColor = "white";
if (typeof(ForeColor)=="undefined")
  ForeColor= "#232323";
if (typeof(TargetDate)=="undefined")
  TargetDate = "02/15/2017 00:00 AM";
if (typeof(DisplayFormat)=="undefined")
  DisplayFormat = "<br>Time left: %%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
if (typeof(CountActive)=="undefined")
  CountActive = true;
if (typeof(FinishMessage)=="undefined")
  FinishMessage = "";
if (typeof(CountStepper)!="number")
  CountStepper = -1;
if (typeof(LeadingZero)=="undefined")
  LeadingZero = true; 


CountStepper = Math.ceil(CountStepper);
if (CountStepper == 0)
  CountActive = false;
var SetTimeOutPeriod = (Math.abs(CountStepper)-1)*1000 + 990;
putspan(BackColor, ForeColor);
var dthen = new Date(TargetDate);
var dnow = new Date();
if(CountStepper>0)
  ddiff = new Date(dnow-dthen);
else
  ddiff = new Date(dthen-dnow);
gsecs = Math.floor(ddiff.valueOf()/1000);
CountBack(gsecs);
</script>
          </p>
              <br><br>
              <p class="text-center">
               <b>Hints:<b> 
                <ol>
                  <li>The more ads you upload, the more you increase your chance to win</li>
                  <li>After posting your ad, share the link of your post and get more chance to win </li>
                  <li>Hurry up, others are increasing their chance to win<li>
               </ol> </p>
              <br><br>
              <p class="text-center">If you want to buy something - here you will find interesting items cheaper than in the store, <br><br><br> If you want to sell something - here you will find many interesting customers than anywhere else.<br><br><br>Start buying and selling in the most easy way on 250trade.com.
              </p>
            </div>
          </div>
          <div class="col-sm-3 padding-right"><!--for advertisement-->
          </div> 
    </div>
  </section> <!--/#cart_items-->

  

  <br><br><br><br>
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
