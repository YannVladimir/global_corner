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
    <title>Upload Item | Get It</title>
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
             display:none; }
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
              <ul class="nav navbar-nav ">
                <li><a href="index.php" class="fon">Home</a></li>
                <li><a href="upload.php" class="active fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="search_box">
                          <form action='search_results.php' method='GET'>
              <input type="text" name='k' class="searchtext col-sm-10" placeholder="Search"/>
              <button type="submit" class="btn btn-default col-sm-2 bton"><i class="fa fa-search"></i></button>
              </form>
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
              <h2 class="title text-center">Fill this form</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  
                          <div class="btn-group pull-right">
                            <div class="btn-group">
                               <button type="button" class="btn btn-default dropdown-toggle country" data-toggle="dropdown">
                                 Jobs
                                  <span class="caret"></span>
                               </button>
                               <ul class="dropdown-menu">
                                  <li><a href="upload.php">Electronic materials</a></li>
                                  <li><a href="upload_mobiles.php">mobiles</a></li>
                                  <li><a href="upload_furnitures.php">Furnitures</a></li>
                                  <li><a href="upload_fashion.php">Fashion</a></li>
                                  <li><a href="upload_cars.php">Cars & Bikes</a></li>
                                  <li><a href="upload_sports.php">Sports & Hobbies</a></li>
                                  <li><a href="upload_estates.php">Real Estates</a></li>
                               </ul>
                            </div>
                          </div>
                  <br><br><br>
                  <div id="electronics">
                    <form action="uploading_jobs.php" id="" class="upload-form row" name="upload-form" method="post" enctype="multipart/form-data">
                      
                        <div class="form-group col-md-12">
                           <input type="text" name="name" class="form-control" required="required" placeholder="Company Name">
                        </div>  
                        <div class="form-group col-md-12">
                           <input type="text" name="email" class="form-control" required="required" placeholder="Email Adress">
                        </div>
                        <div class="form-group col-md-12">
                           <input type="text" name="contact" class="form-control" required="required" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-12">
                             <input type="text" name="izina" class="form-control" required="required" placeholder="Job Position">
                        </div>
                        
                        <div class="form-group col-md-12">
                            <select class="form-control" name="subcategory" required="required">
                                 <option value=''>Select Job-category</option>
                                 <?php 
                                    $query = "SELECT * FROM subcategories ";
                                    $res = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                       if($row['refcat_id']==10)
                                       echo "<option value='{$row['subcat_id']}'>{$row['subcat_name']}</option>";
                                    } 
                                ?>
                            </select>
                        </div> 
                        <div class="form-group col-md-12">
                            <input type="text" name="working_place" class="form-control" placeholder="Working Place">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="field" class="form-control" placeholder="Required field">
                        </div>
                        <p>Select Deadline Date Of Applying
                        <div class="col-sm-4">
                                <select class="form-control" name="day" required="required">
                                 <option value=''>Day</option>
                                 <option value='01'>01</option>
                                 <option value='02'>02</option>
                                 <option value='03'>03</option>
                                 <option value='04'>04</option>
                                 <option value='05'>05</option>
                                 <option value='06'>06</option>
                                 <option value='07'>07</option>
                                 <option value='08'>08</option>
                                 <option value='09'>09</option>
                                 <?php
                                   $i= 10;
                                   while($i<32)
                                   {
                                    echo "<option value='{$i}'>{$i}</option>";
                                    $i = $i+1;
                                   }
                                 ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                                <select class="form-control" name="month" required="required">
                                 <option value=''>Month</option>
                                 <option value='01'>01</option>
                                 <option value='02'>02</option>
                                 <option value='03'>03</option>
                                 <option value='04'>04</option>
                                 <option value='05'>05</option>
                                 <option value='06'>06</option>
                                 <option value='07'>07</option>
                                 <option value='08'>08</option>
                                 <option value='09'>09</option>
                                 <option value='10'>10</option>
                                 <option value='11'>11</option>
                                 <option value='12'>12</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                                <select class="form-control" name="year" required="required">
                                 <option value=''>Year</option>
                                 <?php
                                   $i= 2016;
                                   while($i<2018)
                                   {
                                    echo "<option value='{$i}'>{$i}</option>";
                                    $i = $i+1;
                                   }
                                 ?>
                            </select>
                        </div><br><br>
                        <div class="form-group col-md-12">
                            <select class="form-control" name="experience" required="required">
                                 <option value=''>Required experience</option>
                                 <?php 
                                    $queryy = "SELECT * FROM experience ";
                                    $reso = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($reso))
                                    {
                                       echo "<option value='{$row['id']}'>{$row['exp']}</option>";
                                    } 
                                ?>
                            </select>
                        </div> 
                        <div class="form-group col-md-12">
                            <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Description, Include the required experience, process of applying and any other usefull information"></textarea>
                        </div>
                         
                           <div class="col-sm-4"> <p>Upload company logo</p>
                                  <input type="file" name="logo" class="this" required="required" id="inp" />
                                  <img id="image" class="btn1 starting" />
                            </div>                    
                        <div class="form-group col-md-12">
                           <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                    </form>
                  </div>
                  <div id="jobbs" class="notshowing">
                    job
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
                                            