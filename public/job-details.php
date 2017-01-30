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
    <title>250 Trade | Job details</title>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/yann.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/price-range.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    
    <link href="assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" type="text/css">

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
      /*.sizingimages{
      	height: 200px;
      }
      
      .sizingimagesmax{
      	max-height: 190px;
      }*/
      .fon{
        font-size: 20px;
      }
      .border{
        border-radius: 1px;
        border-style: solid;
        border-color: green;
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
	
	<!--<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>

		This section is for advetisement
	</section>-->
	
	<section>
		<div class="container">
     <div class='row'>
            <div class='col-md-3'></div>
            <div class='col-md-6'>
                <div class='panel panel-default text-center'>
                  <div class='panel-heading'>
                        <h2 class='panel-title'><strong>Job details </strong></h2>
                    </div>
                    <ul class='list-group'>
                  <?php 
                      $id = $_GET['id'];
                      $sql = "SELECT * from items";
                      $res = mysqli_query($con,$sql);
                      while($row = mysqli_fetch_assoc($res)){
                        if($row['post_id']==$id && $row['is_accepted']==1){
                      echo"
                        <li class='list-group-item'><strong>Company name: </strong>{$row['seller']}</li>
                        <li class='list-group-item'><strong>Job Position: </strong>{$row['job_position']}</li>
                        <li class='list-group-item'><strong>Category: </strong>{$row['subcat_name']}</li>
                        <li class='list-group-item'><strong>Required field: </strong>{$row['required_field']}</li>
                        <li class='list-group-item'><strong>District: </strong>{$row['place_name']}</li>
                        <li class='list-group-item'><strong>Place: </strong>{$row['sector']}</li>
                        <li class='list-group-item'><strong>Description: </strong>{$row['details']}</li>
                        <li class='list-group-item'><strong>Email: </strong>{$row['company_name']}</li>
                        <li class='list-group-item'><strong>Contacts: </strong>{$row['contacts']}</li>
                        <li class='list-group-item'><strong>Published on: </strong>{$row['uploaded_date']}</li>
                        <li class='list-group-item'><strong>Apply before: </strong>{$row['deadline']}</li>";
                         }}
                  ?>
                    </ul>
                </div>
            </div>
        </div>
	</section>
	
	<br><br><br><br>
	<?php  
      require('footer.php');    
    ?>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/price-range.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/dist/js/sb-admin-2.js"></script>
  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
  </script>

</body>
</html>