<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Order an item</title>
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
                <li><a href="order.php" class="fon active">Order now</a></li>
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
  <!--/header-->

  <section id="cart_items">
    <div class="container">
          <div class="col-sm-3"></div>
        <div class="col-sm-6 padding-right">
            <div class="contact-form align-center">
              <br>
              <h2 class="title text-center">Enter your order Details</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  <br>
                  <div class="btn-group pull-right">
                            <div class="btn-group">
                               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                                  <?php
                                       $_SESSION['type'] = 'service';
                                       $query = "SELECT * from categories where cat_id=7";
                                       $res = mysqli_query($con,$query);
                                       $row = mysqli_fetch_assoc($res);
                                       echo $row['cat_name'];
                                       echo "  <span class='caret'></span>
                               </button>
                               <ul class='dropdown-menu'>";
                                       $sql = "SELECT * from categories where cat_id!=7";
                                       $r = mysqli_query($con,$sql);
                                       while($gow = mysqli_fetch_assoc($r))
                                       {
                                        echo "<li><a href='make-order.php?id={$gow['cat_id']}'>{$gow['cat_name']}</a></li>";
                                       }
                                  ?>
                              
                               </ul>
                            </div>
                        </div>
                  <br><br>
                          <div class="btn-group pull-left">
                            <div class="btn-group">
                               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                                  <?php
                                       if(isset($_GET['id']))
                                       {
                                          $id = $_GET['id'];
                                       } 
                                       else
                                       {
                                         $id = 11;
                                       }
                                       $query = "SELECT * from service_categories where id='{$id}'";
                                       $res = mysqli_query($con,$query);
                                       $row = mysqli_fetch_assoc($res);
                                       echo $row['category'];
                                      echo "  <span class='caret'></span>
                               </button>
                               <ul class='dropdown-menu'>";
                                       $sql = "SELECT * from service_categories where id!='{$id}'";
                                       $r = mysqli_query($con,$sql);
                                       while($gow = mysqli_fetch_assoc($r))
                                       {
                                        echo "<li><a href='order.php?id={$gow['id']}'>{$gow['category']}</a></li>";
                                       }
                                  ?>
                              
                               </ul>
                            </div>
                          </div>
                  <br><br><br>
                  <div id="electronics">
                    <form action="ordering.php" id="" class="upload-form row" name="upload-form" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                             <input type="text" name="izina" class="form-control" required="required" placeholder="Order Title">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <select class="form-control" name="subcategory" required="required">
                                 <option value="">Select order-category</option>
                                 <?php
                                    $query = "SELECT * FROM service_subcategories where  ref1='{$id}' or ref2='{$id}' or ref3='{$id}' or ref4='{$id}'";
                                    $res = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                      echo "<option value='{$row['id']}'>{$row['sub_category']}</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Description of your order, less than 1500 characters"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" name="location" class="form-control" required="required" placeholder="Location">
                        </div>
                           <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                  </div>
            </div>
          </div>
                <div class="col-sm-3 padding-right"><!--for advertisement--></div> 
    </div>
  </section> <!--/#cart_items-->

  

  <br><br><br><br><br><br>
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
                                            