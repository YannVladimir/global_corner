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
    <title>250 Trade | Services</title>
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
     /*.sizingimagesmax{
        height: 190px;

      }*/
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
          <div class="col-sm-12">
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
                <li><a href="home.php">Home</a></li>
                <?php  
      include('links.php');    
    ?>
                
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
  
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
                  <div class="right-sidebar">
            <h2 class="title text-center">Service categories</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <?php 
                                        $c = 11;
                                        $query = "SELECT * FROM service_categories";
                                        $res = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_assoc($res))
                                        {
                                            if($row['id']==$c)
                                            {
                                               echo "<div class='panel panel-default'>
                                                         <div class='panel-heading'>
                                                             <h4 class='panel-title'>
                                                                <a data-toggle='collapse' data-parent='#accordian' href='#{$row['id']}'>
                                                                  <span class='badge pull-right'><i class='fa fa-angle-down'></i></span>
                                                                     {$row['category']}
                                                                </a>
                                                             </h4>
                                                        </div>
                                                        <div id='$c' class='panel-collapse collapse'>
                                                            <div class='panel-body'>
                                                                <ul>";
                                                                    $queryy = "SELECT * FROM service_subcategories ";
                                                                    $re = mysqli_query($con,$queryy);
                                                                    while($ro = mysqli_fetch_assoc($re))
                                                                    {
                                                                        if($ro['ref1']==$c|| $ro['ref2']==$c || $ro['ref3']==$c || $ro['ref4']==$c)
                                                                        {
                                                                             echo "<li><a href='service-sub-category.php?id={$ro['id']}'>*   {$ro['sub_category']} </a></li>";
                                                   
                                                                         }
                                                                    }
                                              
                                            }
                                            echo"</div>
                                                  </div>
                                                    </div>";
                                            $c = $c+1;
                                            
                                        } 
                                    ?>
              
            </div><!--/category-productsr-->
            
          </div>
        </div>
        
        <div class="col-sm-6 padding-right">
          <h2 class="title text-center">Recomended service providers</h2>
                    <br>
                    <?php 
                       $id = $_GET['id'];
                       $query = "SELECT * FROM amaservice where is_accepted = 1 and subcategory_id = '{$id}' order by total_marks desc limit 20";
                       $res = mysqli_query($con,$query);
                       while($row = mysqli_fetch_assoc($res))
                       {
                        if($row['main'] == 'noimage.jpg' || $row['main'] == '' )
                        {
                              if($row['avg']==0){
                                 $img = '<img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" />';

                              }
                              elseif($row['avg']<=1.25)
                              {
                                $img = '<img class="ratesize" src="assets/images/shop/rating2.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.25 && $row['avg']<1.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.75 && $row['avg']<2.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.25 && $row['avg']<2.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.75 && $row['avg']<3.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.25 && $row['avg']<3.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.75 && $row['avg']<4.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>=4.25 && $row['avg']<4.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img class="ratesize" src="assets/images/shop/rating10.png" alt="" />';
                              }

                        echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-5'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <a href='service.php?id={$row['id']}'>
                                                    <img src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                    </a>
                                                  </div>
                                            </div><br><br>
                                            <b> <a href='service-sub-category.php?id={$row['subcategory_id']}'>{$row['category']} <br> {$row['sub_category']}</b></a>

                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-7'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        {$img}<br> <b>{$row['avg']} stars | </b>
                                        <b>Total votes: {$row['total_votes']}</b><br>
                                        <span>
                                             <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></a>";
                        }
                        else
                        {
                          if($row['avg']==0){
                                 $img = '<img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" /><img class="ratesize" src="assets/images/shop/no.png" alt="" />';

                              }
                              elseif($row['avg']<=1.25)
                              {
                                $img = '<img class="ratesize" src="assets/images/shop/rating2.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.25 && $row['avg']<1.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating3.png" alt="" />';
                              }
                              elseif ($row['avg']>=1.75 && $row['avg']<2.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating4.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.25 && $row['avg']<2.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating5.png" alt="" />';
                              }
                              elseif ($row['avg']>=2.75 && $row['avg']<3.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating6.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.25 && $row['avg']<3.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating7.png" alt="" />';
                              }
                              elseif ($row['avg']>=3.75 && $row['avg']<4.25) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating8.png" alt="" />';
                              }
                              elseif ($row['avg']>=4.25 && $row['avg']<4.75) {
                                $img = '<img class="ratesize" src="assets/images/shop/rating9.png" alt="" />';
                              }
                              else{
                                $img = '<img class="ratesize" src="assets/images/shop/rating10.png" alt="" />';
                              }

                        echo "<br><a href='service.php?id={$row['id']}'>
                        <div class='row' style='border: 1px solid #F7F7F0; background:#f6f6f6'>";
                            echo "<div class='col-sm-5'>
                                     <div class='product-image-wrapper'>
                                        <div class='single-products'>
                                            <div class='productinfo text-center'>
                                                 <div class='sizingimages'>
                                                    <a href='service.php?id={$row['id']}'>
                                                    <img src='assets/images/posts/{$row['main']}' alt='' class=''/>
                                                    </a>
                                                  </div>
                                            </div><br><br>
                                            <b> <a href='service-sub-category.php?id={$row['subcategory_id']}'>{$row['category']} <br> {$row['sub_category']}</b></a>

                                        </div>
                                     </div>
                                  </div>
                                  <div class='col-sm-7'>
                                      <div class='product-information' style='border-left-style:none;border-bottom-style:none'><!--/product-information-->
                                        {$img}<br> <b>{$row['avg']} stars | </b>
                                        <b>Total votes: {$row['total_votes']}</b><br>
                                        <span>
                                             <h2>{$row['reserved']}</h2>
                                        </span>
                                        <p>Contact number:<b> {$row['phone']}</b></p>
                                        <p>Place:<b> {$row['place_name']} - {$row['location']}</b></p>
                                        <p><b></b></p><br>
                                        <p style='text-align:center;'><a style='background:#90DC60; color:white;' href='service.php?id={$row['id']}' class='btn btn-default add-to-cart'><i class='fa fa-shopping-cart'></i>View Details</a><p>
                                        </div><!--/product-information-->
            </div>";

                        echo "</div></a>";
                        }
                       }
                    ?>
      </div>
             
    </div>
    </div>
  </section>
  <br><br><br><br><br><br>
  <?php  
      require('footer.php');    
    ?>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/yann.min.js"></script>
  <script src="assets/js/jquery.scrollUp.min.js"></script>
  <script src="assets/js/price-range.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
