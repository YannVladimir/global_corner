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
    <meta name="keywords" content="job in rwanda, job vacancies, latest jobs, 250">
    <meta name="author" content="yann vladimir">
    <title>Job vacancies</title>
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
      .sizingimages{
        height: 200px;
      }
      .fon{
        font-size: 20px;
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
                <li><a href="job_vacancies.php" class="active fon">Job vacancies</a></li>
                
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

            <div class='col-sm-1'></div>

            <div class='col-sm-10'>
              <br><br>
                    <h2 class="title text-center">Business Support Advisor,FHI 360, Kigali, Rwanda</h2>
                    <p><h3>About FHI 360</h3>
                    FHI 360 is a nonprofit human development organization dedicated to improving lives in lasting ways by advancing integrated, locally driven solutions. Our staff includes experts in health, education, nutrition, environment, economic development, civil society, gender, youth, research and technology — creating a unique mix of capabilities to address today's interrelated development challenges. FHI 360 serves more than 70 countries and all U.S. states and territories. We are currently seeking qualified candidates for the position of: Business Support Advisor</p>
                    
                    <p><h3>Description</h3>
                    FHI 360 seeks Business Support Advisor for a USAID/Rwanda Activity that seeks to increase off-farm employment opportunities through enhanced access to finance, increased private investment, expanded reach of entrepreneurship support organizations, increased capacity of firms to attract and use finance, and deepened finance sector capacity to assess risk and increase return. The Business Support Advisor will work with public and private sector stakeholders on capacity building and product and service development for growing enterprises.</p>

                    <p><h3>Job Summary / Responsibilities</h3>
                     <ul>
                       <li>Provide technical guidance to business support organizations servicing enterprises and work with stakeholders to identify gaps and devise solutions for enterprises, particularly those preparing themselves for growth through financing/investment;
                       </li>
                       <li>Develop and deliver training to BDS providers on financial management, business practices and skills; business plan development; and more, to strengthen and/or expand BDS providers' portfolios of products and services;
                       </li>
                       <li>Collaborate with the Access to Finance and Investment Specialist on access to finance and capacity building product and service development to ensure products are designed to enhance enterprises' ability to prepare for, access, and manage credit, investment or other obligations, and to address internal organizational management needs;
                       </li>
                       <li>
                       Link enterprises to business support providers that provide the types of products and services they need/seek;
                       </li>
                       <li>Contribute inputs to annual work plans and all relevant communications and required client reporting mechanisms in close collaboration with field-based program staff; and
                       </li>
                       <li>Provide overall technical guidance, monitoring and oversight of directed technical assistance and capacity building activities.
                       </li>

                     </ul>
                    </p>
                    <p><h3>Qualifications</h3>
                      <ul>
                        <li>Minimum of 8 years' experience in international development or private sector/value chain development, enterprise development or business support experience</li>
                        <li>Knowledge of small, medium and large enterprises operating in off-farm activities in Rwanda, the agricultural sector, and the business and investment climate in Rwanda</li>
                        <li>Experience in training, capacity building, product/service development and outreach</li>
                        <li>USAID experience preferred</li>
                        <li>University degree in finance, economics, business, international relations or related</li>
                        <li>Excellent oral and written English communication skills</li>
                      </ul>
                    </p>
                    <p class="text-center">
                      <a href="https://jobs-fhi360.icims.com/jobs/18491/business-support-advisor/job"><button class="form-btn primary">More information and Application details</button></a>
                    </p>
            </div>
            <div class="col-sm-1"></div>
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



