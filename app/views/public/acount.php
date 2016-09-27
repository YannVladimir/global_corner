<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My acount | Get It</title>
    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/css/yann.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/prettyPhoto.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/price-range.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/animate.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/main.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/responsive.css"; ?>" rel="stylesheet">
    
    <link href="<?php echo BASEURL."../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"; ?>" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo BASEURL."../assets/images/ico/favicon.ico"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-144-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-114-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-72-precomposed.png"; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo BASEURL."../assets/images/ico/apple-touch-icon-57-precomposed.png"; ?>">
    <style type="text/css">
      .sizingimages{
      	height: 200px;
      }
      .sizingimagesmax{
      	max-height: 190px;
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
    require(BASEPATH.'app/views/public/header.php');   
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
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>home">Home</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>upload_electronics">Sell</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>categories">Buy</a></li>
								<li><a></a></li><li><a></a></li><li><a></a></li>
								<li><a href="<?php echo BASEURL; ?>contact_us">Contact us</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box">
							<form action='/eshopper/public/results' method='GET'>
              <input type="text" name='k' class="searchtext col-sm-10" placeholder="Search"/>
              <button type="submit" class="btn btn-default col-sm-2 bton"><i class="fa fa-search"></i></button>
              </form>
            </div>
					</div>
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
                        <li class='list-group-item'><button type='submit' class='btn btn-default bton'>Edit Acount</button></li>
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
                                            <th>Post photo</th>
                                            <th>Post name</th>
                                            <th>Price</th>
                                            <th>View & Edit</th>
                                            <th>Delete post</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                          if($_SESSION)
                                          {
                                             $b = new Items();
                                             $id = $_SESSION['id'];
                                             $res = $b->selectPostOfUser($id);
                                             while($row = mysqli_fetch_assoc($res))
                                             {
                                               echo "<tr class='odd gradeX'><td><img src='/eshopper/assets/images/posts/{$row['main']}'/></td><td><strong>{$row['name']}</strong></td><td><strong>{$row['price']}</strong></td><td><form action='/eshopper/public/mypost' method='GET'><input type='text' name='id' value='{$row['post_id']}' class='hidden'/><input type='submit' value='View Details'/></form></td><td><form action='' method='post'><input type='text' name='id' value='{$row['post_id']}' class='hidden'/><input type='submit' value='Remove'/></form></td></tr> ";
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
	
	<br><br><br><br>
	<?php  
      require(BASEPATH.'app/views/public/footer.php');    
    ?>
  <script src="<?php echo BASEURL."../assets/js/jquery.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/yann.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.scrollUp.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.prettyPhoto.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/price-range.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/main.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/bower_components/jquery/dist/jquery.min.js"; ?>"></script>
  <script type="text/javascript" src="<?php echo BASEURL."../assets/bower_components/metisMenu/dist/metisMenu.min.js"; ?>"></script>
  <script type="text/javascript" src="<?php echo BASEURL."../assets/bower_components/datatables/media/js/jquery.dataTables.min.js"; ?>"></script>
  <script type="text/javascript" src="<?php echo BASEURL."../assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"; ?>"></script>
  <script type="text/javascript" src="<?php echo BASEURL."../assets/dist/js/sb-admin-2.js"; ?>"></script>
  <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
  </script>

</body>
</html>