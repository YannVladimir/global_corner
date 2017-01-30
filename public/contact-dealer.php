<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
$f = $_GET['id'];
$_SESSION['answer']=$f;
$_SESSION['info']="View the order details bellow, and you can contact the seller through email or phone call";

/*

if (isset($_SESSION['id']))
{
    if(!isset($_SESSION['answer']))
    {
      $f = $_GET['id'];
      $_SESSION['answer']=$f;
    }
    $_SESSION['info']="View the order details bellow, and you can contact the seller through email or phone call";
}
else here for else part, it is not working fine when the user nta acount yari afitemo bari kuvuga ngo undefined index id on line $f = $_GET['id'];
{
  $f = $_GET['id'];
  $_SESSION['answer']=$f;
  $_SESSION['message']="Please log in to your acount to view the post details, or you can create a new acount if you don't have one ";
  require('answer-login.php');
  exit;
}*/
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
    <link rel="shortcut icon" href="assets/images/ico/icon.ico">
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
              <?php
                        if(isset($_SESSION['info']))
                        {
                          echo "<div class='msg'>";
                                 echo '<p>'.$_SESSION['info'].'</p>';
                                 unset($_SESSION['info']);                         
                          echo "</div><br><br>";
                        }
                      $id = $_SESSION['answer']; 
                      $sql = "SELECT * from vieworders where id ='{$id}'";
                      $res = mysqli_query($con,$sql);
                      while($row = mysqli_fetch_assoc($res)){
                        if($row['is_accepted']==1){
                      echo " <div>
                      <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h2 class='panel-title'><strong>{$row['name']} </strong></h2>
                    </div>";
                    echo "<ul class='list-group'>
                        <li class='list-group-item'><strong></strong>{$row['details']}</li>
                        <li class='list-group-item'><strong>Location:</strong>{$row['place']}</li>
                        <li class='list-group-item'><strong>Published on:</strong>{$row['up_date']}</li>
                        <li class='list-group-item'><strong>Seller email:</strong>{$row['email']}</li>
                        <li class='list-group-item'><strong>Seller contact number:</strong>{$row['phone']}</li>
                    </ul>
              </div></div>";
              $cat = $row['category'];
              $id = $row['id'];
                     
                     }
                   }

                   unset($_SESSION['answer']);

          ?>
                </div>
        </div>
        <div class="row">
        <div class="col-sm-12">

            <div class='recommended_items'><!--recommended_items-->
              <br><Br><br>
            <h2 class='title text-center'>recommended orders</h2>
           <?php 
                           $queryyy = "SELECT * FROM vieworders where category = '{$cat}' and id !='{$id}' and is_accepted = 1 order by id desc limit 4";
                          
                            $res1 = mysqli_query($con,$queryyy);
                            while($row = mysqli_fetch_assoc($res1))
                            {
                                echo " <div class='col-sm-3'>
                      <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h2 class='panel-title'><strong>{$row['name']} </strong></h2>
                    </div>";
                    echo "<ul class='list-group'>
                        <li class='list-group-item'><strong></strong>{$row['details']}</li>
                        <li class='list-group-item'><strong></strong>{$row['place']}</li>
                        <li class='list-group-item'><strong></strong>{$row['up_date']}</li>
                        <li class='list-group-item'>
                          <form action='contact-dealer.php' method='GET'>
                            <input type='text' name='id' value='{$row['id']}' class='hidden'>
                             <button type='submit' class='btn btn-default bton'>Answer me</button>
                          </form>
                        </li>
                        </ul>
              </div></div>";}
                  echo "</div>";

            ?>
        </div>
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