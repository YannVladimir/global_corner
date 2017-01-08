<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
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
    <title>250 Trade | My acount</title>
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
                        <h2 class='panel-title'><strong>Personal details </strong></h2>
                    </div>
                    <ul class='list-group'>
                      
                        <li class='list-group-item'><strong>First name: </strong> <?php echo $_SESSION['firstname']; ?></li>
                        <li class='list-group-item'><strong>Last name: </strong> <?php
                      echo $_SESSION['lastname'];
                        ?></li>
                        <li class='list-group-item'><strong>Email ID: </strong><?php
                      echo $_SESSION['email'];
                        ?></li>
                        <li class='list-group-item'><strong>Contact Number: </strong><?php
                      echo $_SESSION['phone'];
                        ?></li>
                        <li class='list-group-item'>
                          <form action="edit_my_acount.php" method="POST">
                            <input type="text" class='hidden' name="_token" value="<?php echo $_SESSION['_token']; ?>">
                             <button type='submit' class='btn btn-default bton'>Edit Acount</button>
                          </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br><br>
        <div class='row'>
            <div class='col-md-1'></div>
            <div class='col-md-10'>
                <div class='panel panel-default text-center'>
                    <div class='panel-heading'>
                        <h2 class='panel-title'><strong>My posts</strong></h2>
                    </div>
                    <div class='panel-body'>
                       <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Post type</th>
                                            <th>Post title</th>
                                            <th>Category</th>
                                            <th>Interested</th>
                                            <th>Reviews</th>
                                            <th>View & Edit</th>
                                            <th>Delete post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          if(isset($_SESSION['id']))
                                          {
                                             $id = $_SESSION['id'];
                                             $query = "SELECT * FROM items where user = '{$id}'";
                                             $res = mysqli_query($con,$query);
                                             while($row = mysqli_fetch_assoc($res))
                                             {
                                               $sql = "SELECT * FROM users where buy_product = {$row['subcat_id']}";
                                               $re = mysqli_query($con,$sql);
                                               $interested = 0;
                                               while($ro = mysqli_fetch_assoc($re))
                                               {
                                                 $interested = $interested + 1;
                                               }
                                               echo "<tr class='odd gradeX'><td>Product</td><td><strong>{$row['name']}</strong></td><td><strong>{$row['subcat_name']}</strong></td><td>{$interested}</td><td>-</td><td><form action='my_post.php' method='GET'><input type='text' name='id' value='{$row['post_id']}' class='hidden'/><input type='submit' value='View Details'/></form></td><td><form action='delete.php' method='POST'><input type='text' class='hidden' name='_token' value='{$_SESSION['_token']}'><input type='text' name='id' value='{$row['post_id']}' class='hidden'/><input type='submit' value='Remove'/></form></td></tr> ";
                                             }

                                             //for services then
                                             // for this work on the view, service id and subcategory id
                                             $query = "SELECT * FROM amaservice where user_id = '{$id}'";
                                             $res = mysqli_query($con,$query);
                                             while($row = mysqli_fetch_assoc($res))
                                             {
                                               $sql = "SELECT * FROM users where buy_service = {$row['subcategory_id']}";
                                               $re = mysqli_query($con,$sql);
                                               $interested = 0;
                                               while($ro = mysqli_fetch_assoc($re))
                                               {
                                                 $interested = $interested + 1;
                                               }
                                               echo "<tr class='odd gradeX'><td>Service</td><td><strong>{$row['title']}</strong></td><td><strong>{$row['sub_category']}</strong></td><td>{$interested}</td><td>Votes:{$row['total_votes']}  <br> Rating: {$row['avg']} </td><td><form action='my_service.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidden'/><input type='submit' value='View Details'/></form></td><td><form action='delete.php' method='POST'><input type='text' class='hidden' name='_token' value='{$_SESSION['_token']}'><input type='text' name='id' value='{$row['id']}' class='hidden'/><input type='submit' value='Remove'/></form></td></tr> ";
                                             }

                                             // for orders work on view add is_product u ve forgotten it and subcategory, as well as order id

                                             $query = "SELECT * FROM vieworders where user = '{$id}'";
                                             $res = mysqli_query($con,$query);
                                             while($row = mysqli_fetch_assoc($res))
                                             {
                                               if($row['is_product = 1'])
                                               {
                                               $sql = "SELECT * FROM users where sell_product = {$row['subcat_id']}";
                                               }
                                               else
                                               {
                                                $sql = "SELECT * FROM users where sell_service = {$row['subcat_id']}";
                                               }
                                               $re = mysqli_query($con,$sql);
                                               $interested = 0;
                                               while($ro = mysqli_fetch_assoc($re))
                                               {
                                                 $interested = $interested + 1;
                                               }
                                               echo "<tr class='odd gradeX'><td>You ordered</td><td><strong>{$row['name']}</strong></td><td><strong>{$row['subcat_name']}</strong></td><td>{$interested}</td><td>-</td><td><form action='my_order.php' method='GET'><input type='text' name='id' value='{$row['id']}' class='hidden'/><input type='submit' value='View Details'/></form></td><td><form action='delete.php' method='POST'><input type='text' class='hidden' name='_token' value='{$_SESSION['_token']}'><input type='text' name='id' value='{$row['id']}' class='hidden'/><input type='submit' value='Remove'/></form></td></tr> ";
                                             }
                                          }
                                       ?>  
                                    </tbody>
                                </table>   
                       </div>
  
                </div>
            </div>
        </div>
    </div>
	</section>
	<section id="do_action">
    <div class="container">
      <div class="row" id="choosing">
        <div class="col-sm-1"></div>
        <?php 
            $query = "SELECT * FROM users where user_id = '{$id}'";
            $res = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($res);
            $pbuy = $row['buy_product'];
            $psell = $row['sell_product'];
            $sbuy = $row['buy_service'];
            $ssell = $row['sell_service'];
        ?>
        <div class="col-sm-5">
          <div class="total_area">
            <p style="padding-left:35px">Current product category to buy</p>
            <ul>
              <?php
                if($pbuy == 0)
                {
                   echo "<li>Not selected <span></span></li>";
                }
                else
                {
                   $sql = "SELECT * FROM subcategories where subcat_id = '{$pbuy}'";
                   $res = mysqli_query($con,$sql);
                   $row = mysqli_fetch_assoc($res);
                   echo "<li>{$row['subcat_name']} <span></span></li>"; 
                }
              ?>
              
            </ul>
            <p style="padding-left:35px">current product category to sell</p>
            <ul>
              <?php
                if($psell == 0)
                {
                   echo "<li>Not selected <span></span></li>";
                }
                else
                {
                   $sql = "SELECT * FROM subcategories where subcat_id = '{$psell}'";
                   $res = mysqli_query($con,$sql);
                   $row = mysqli_fetch_assoc($res);
                   echo "<li>{$row['subcat_name']} <span></span></li>"; 
                }
              ?>
            </ul>
          </div>
          <div class="heading">
            <h3>Which product category is interesting you to trade</h3>
            <p>Choose a product category that you are interested in, in order to get notifications of different posts from sellers and customers of this category type.</p>
          </div>
          <div class="chose_area">
            <div class="btn-group">
              <p>Wanna buy</p>
               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                  <?php
                       
                      echo "Select Product category";
                      echo "<span class='caret'></span>
               </button>
               <ul class='dropdown-menu'>";
                       $sql = "SELECT * from categories";
                       $r = mysqli_query($con,$sql);
                       while($gow = mysqli_fetch_assoc($r))
                       {
                        echo "<li><a href='product-sub_categories.php?id={$gow['cat_id']}&type=0'>{$gow['cat_name']}</a></li>";
                       }
                  ?>
              
               </ul>
            </div>

            <div class="btn-group">
              <p>Wanna sell
              </p>
               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                  <?php
                       
                       echo "Select Product category";
                      echo "<span class='caret'></span>
               </button>
               <ul class='dropdown-menu'>";
                       $sql = "SELECT * from categories";
                       $r = mysqli_query($con,$sql);
                       while($gow = mysqli_fetch_assoc($r))
                       {
                        echo "<li><a href='product-sub_categories.php?id={$gow['cat_id']}&type=1'>{$gow['cat_name']}</a></li>";
                       }
                  ?>
              
               </ul>
            </div>
          </div>
          
        </div>
        <div class="col-sm-5">
          <div class="total_area">
            <p style="padding-left:35px">Current service category to buy</p>
            <ul>
              <?php
                if($sbuy == 0)
                {
                   echo "<li>Not selected <span></span></li>";
                }
                else
                {
                   $sql = "SELECT * FROM service_subcategories where id = '{$sbuy}'";
                   $res = mysqli_query($con,$sql);
                   $row = mysqli_fetch_assoc($res);
                   echo "<li>{$row['sub_category']} <span></span></li>"; 
                }
              ?>
            </ul>
            <p style="padding-left:35px">Current service category to sell</p>
            <ul>
              <?php
                if($ssell == 0)
                {
                   echo "<li>Not selected <span></span></li>";
                }
                else
                {
                   $sql = "SELECT * FROM service_subcategories where id = '{$ssell}'";
                   $res = mysqli_query($con,$sql);
                   $row = mysqli_fetch_assoc($res);
                   echo "<li>{$row['sub_category']} <span></span></li>"; 
                }
              ?>
            </ul>
          </div>
          <div class="heading">
            <h3>Which Service category is interesting you to trade</h3>
            <p>Choose a Service category that you are interested in, in order to get notifications of different posts from service providers
             and customers of this category type.</p>
          </div>
          <div class="chose_area">
            <div class="btn-group">
              <p>Wanna get served</p>
               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                  <?php
                       
                       echo "Select Product category";
                      echo "<span class='caret'></span>
               </button>
               <ul class='dropdown-menu'>";
                       $sql = "SELECT * from service_categories";
                       $r = mysqli_query($con,$sql);
                       while($gow = mysqli_fetch_assoc($r))
                       {
                        echo "<li><a href='product-sub_categories.php?id={$gow['id']}&type=3'>{$gow['category']}</a></li>";
                       }
                  ?>
              
               </ul>
            </div>

            <div class="btn-group"> 
              <p>Wanna serve
              </p>
               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px" data-toggle="dropdown">
                  <?php
                       
                       echo "Select Product category";
                      echo "<span class='caret'></span>
               </button>
               <ul class='dropdown-menu'>";
                       $sql = "SELECT * from service_categories";
                       $r = mysqli_query($con,$sql);
                       while($gow = mysqli_fetch_assoc($r))
                       {
                        echo "<li><a href='product-sub_categories.php?id={$gow['id']}&type=4'>{$gow['category']}</a></li>";
                       }
                  ?>
              
               </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/#do_action-->

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