<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
/*if(!isset($_SESSION['id']))
{
  $id = $_GET['id'];
  $_SESSION['message'] = 'Please log in to your acount to continue';
  $_SESSION['page'] = 'my_order'; 
  require_once ('login.php?id=$id');
  exit;
}*/
//checkUser();
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | My order</title>
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
                <li><a href="upload.php" class="fon">Sell</a></li>
                <li><a href="order.php" class="fon">Order now</a></li>
                <li><a href="categories.php" class="fon">Products</a></li>
                <li><a href="services.php" class="fon">Services</a></li>
                <li><a href="orders.php" class="active fon">Orders</a></li>
                
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
                        <h2 class='panel-title'><strong>My order details </strong></h2>
                    </div>
                     
                      <?php
                        $id = $_GET['id'];
                        $query = "SELECT * from vieworders where id = '{$id}' and user = '{$_SESSION['id']}'";
                        $res = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($res);
                        if($row['is_accepted']==0)
                              {
                                $accepted = 'The adminstration is currently verifying this post';
                              }
                              else
                              {
                                $accepted = '';
                              }
                        if($row['is_product']==1)
                        {
                          $sql = "SELECT * FROM users where sell_product = {$row['category']}";
                          $s = "SELECT * FROM subcategories where subcat_id = {$row['category']}";
                          $r = mysqli_query($con,$s);
                          $o = mysqli_fetch_assoc($r);
                          $re = mysqli_query($con,$sql);
                          $interested = 0;
                          while($ro = mysqli_fetch_assoc($re))
                          {
                           $interested = $interested + 1;
                          }
                          $cat = $row['subcat_id'];
                          echo "<ul class='list-group'> 
                           <li class='list-group-item'><strong>Title: </strong>{$row['name']}</li>
                           <li class='list-group-item'><strong>category: </strong>{$o['subcat_name']}</li>
                           <li class='list-group-item'><strong>Details: </strong>{$row['details']}</li>
                           <li class='list-group-item'><strong>uploaded-date: </strong>{$row['up_date']}</li>
                        <li class='list-group-item'><strong>Service providers: </strong>{$interested} sellers <br><a href='sub-category.php?id=$cat'>view details</a></li>
                        <li class='list-group-item'><strong>Current status: </strong>{$accepted}</li>
                          <li class='list-group-item'>
                          <form action='order-delete.php' method='POST'>
                            <input type='text' class='hidden' name='_token' value='{$_SESSION['_token']}'>
                             <button type='submit' class='btn btn-default bton'>Delete Order</button>
                          </form>
                        </li>
                    </ul>";
                  }
                        else
                        {
                          $sql = "SELECT * FROM users where sell_service = {$row['category']}";
                          $s = "SELECT * FROM service_subcategories where id = {$row['category']}";
                          $r = mysqli_query($con,$s);
                          $o = mysqli_fetch_assoc($r);
                          $re = mysqli_query($con,$sql);
                          $interested = 0;
                          while($ro = mysqli_fetch_assoc($re))
                          {
                           $interested = $interested + 1;
                          }
                          $cat = $row['subcat_id'];
                          $category = $row['subcat_name'];
                          echo "<ul class='list-group'> 
                        <li class='list-group-item'><strong>Title: </strong>{$row['name']}</li>
                        <li class='list-group-item'><strong>category: </strong>{$o['sub_category']}</li>
                        <li class='list-group-item'><strong>Details: </strong>{$row['details']}</li>
                        <li class='list-group-item'><strong>uploaded-date: </strong>{$row['up_date']}</li>
                        <li class='list-group-item'><strong>Service providers: </strong>{$interested} sellers <br><a href='service-sub-category.php?id=$cat&category=$cat_name'>view details</a></li>
                        <li class='list-group-item'><strong>Current status: </strong>{$accepted}</li>
                        <li class='list-group-item'>
                          <form action='order-delete.php' method='POST'>
                            <input type='text' class='hidden' name='_token' value='{$_SESSION['_token']}'>
                             <button type='submit' class='btn btn-default bton'>Delete Order</button>
                          </form>
                        </li>
                    </ul>";
                        }
                        
                      ?>
                        
                </div>
            </div>
        </div>
        <br><br>
        
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