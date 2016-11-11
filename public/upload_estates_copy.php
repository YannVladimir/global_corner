<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
checkToken();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>250 Trade | Upload item</title>
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
                <li><a href="upload.php" class="active fon">Sell</a></li>
                <li><a href="categories.php" class="fon">Buy</a></li>
                <li class="dropdown"><a href="#">Odering<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu"> 
                        <li><a href="order.php" class="fon">Make order</a></li>
                        <li><a href="orders.php" class="fon">View orders</a></li> 
                    </ul>
                </li>
                <li><a href="contact_us.php" class="fon">Contact us</a></li>
                
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
              <h2 class="title text-center">Enter Ad's Details</h2>
              <div class="status alert alert-success" style="display: none"></div>
                  
                          <div class="btn-group pull-right">
                            <div class="btn-group">
                               <button type="button" class="btn btn-default dropdown-toggle usa" style="height:32px; font-size:14px"  data-toggle="dropdown">
                                <?php
                                       $id = $_GET['id'];
                                       $query = "SELECT * from categories where cat_id='{$id}'";
                                       $res = mysqli_query($con,$query);
                                       $row = mysqli_fetch_assoc($res);
                                       echo $row['cat_name'];
                                      echo "  <span class='caret'></span>
                               </button>
                               <ul class='dropdown-menu'>";
                                       $sql = "SELECT * from categories where cat_id!='{$id}'";
                                       $r = mysqli_query($con,$sql);
                                       while($gow = mysqli_fetch_assoc($r))
                                       {
                                        echo "<li><a href='upload.php?id={$gow['cat_id']}'>{$gow['cat_name']}</a></li>";
                                       }
                                  ?>
                                </ul>
                            </div>
                          </div>
                  <br><br><br>
                  <div id="electronics">
                    <form action="uploading_estates.php" id="validation" novalidate="novalidate" class="upload-form row" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                             <input type="text" name="izina" required="required" class="form-control" placeholder="Ad title">
                        </div>
                        <div class="form-group col-md-6">
                           <input type="text" name="name" required="required" class="form-control" placeholder="Seller Name">
                        </div> 
                        <div class="form-group col-md-6">
                           <input type="text" name="contact" required="required" class="form-control" placeholder="Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <select class="form-control" required="required" name="subcategory">
                                 <option value="">Select Real-Estate category</option>
                                 <?php 
                                    $query = "SELECT * FROM subcategories ";
                                    $res = mysqli_query($con,$query);
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                       if($row['refcat_id']==$id)
                                       echo "<option value='{$row['subcat_id']}'>{$row['subcat_name']}</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                             <select class="form-control" required="required" name="rentalorsell">
                                 <option value="">Select if renting or selling</option>
                                 <option value="0">Selling</option>
                                 <option value="1">Renting</option>
                            </select>    
                        </div>
                         <div class="form-group col-md-6">
                          <select class="form-control" required="required" name="location">
                             <option ="">Select District</option>
                                <?php 
                                   $query = "SELECT * FROM places order by place_name";
                                   $res = mysqli_query($con,$query);
                                   while($row = mysqli_fetch_assoc($res))
                                   {
                                      echo "<option value='{$row['place_id']}'>{$row['place_name']}</option>";
                                   } 
                                ?>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="sector" class="form-control" required="required" placeholder="sector">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="road" class="form-control" placeholder="Street number (eg: KK 23 ave 256)">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="price" class="form-control"  placeholder="Price">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Descriptions, Include number of rooms, and any other usefull informations"></textarea>
                        </div>
                        <div class="col-sm-4"> 
                                  <input type="file" name="main" class="this" id="inp" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  
                                  <img id="image" class="btn1 starting" />
                                  
                            </div>
                            <div class="col-sm-4">
                                  <input type="file" name="img1" class="this" id="inp2" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  <img id="image2" class="btn2 btnlocation" />
                            </div>
                            <div class="col-sm-4">
                                  <input type="file" name="img2" class="this" id="inp3" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  <img id="image3" class="btn3 btnlocation" />
                            </div>
                            <div class="col-sm-4">     
                                  <input type="file" name="img3" class="this" id="inp4" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  <img id="image4" class="btn4 btnlocation" />
                            </div>
                            <div class="col-sm-4">      
                                  <input type="file" name="img4" class="this" id="inp5" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  <img id="image5" class="btn5 starting" />
                            </div>
                            <div class="col-sm-4">      
                                  <input type="file" name="img5" class="this" id="inp6" />
                                  <progress id="prog" max="100" value="0"></progress>
                                  <img id="image6" class="btn6 btnlocation" />
                            </div>    
                                  <input type="file" name="img6" id="inp7" class="hide" />
                                  <img id="image7" class="btn7 btnlocation hide" />
                                  <input type="file" name="img7"  id="inp8" class="hide" />
                                  <img id="image8" class="btn8 btnlocation hide" />
                            </div><br> 
                                           
                        <div class="form-group col-md-12">
                           <input type="text" class='hidden' name="_token" value="<?php echo $_SESSION['_token']; ?>">
                           <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                        </div>
                        <font>
                         By posting your post you agree with our <a href='terms-of-use.php' target='blank' style='color=#3AACEB'>Terms of use </a> and <a href='posting-rules.php' target='blank' style='color=#3AACEB'>Posting rules </a>
                        </font>
                    </form>
                  </div>
                  <div id="jobbs" class="notshowing">
                    job
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
  <script src="assets/js/price-range.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.form.min.js"></script>
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/uploading.js"></script>
  <script>
    var main = function()
    {
       $("#validation").on('submit',function(e)
       {
          $(this).ajaxSubmit(
          {
             beforeSend:function()
             {
               $("#prog").show();
               $("#prog").attr('value','0');

             },
             uploadProgress:function(event,position,total,percentComplete)
             {
               $("#prog").attr('value',percentComplete);
                $("#percent").html(percentComplete+'%');
             },
             success:function(data)
             {
              $("#here").html(data);
             }
          });
       });
    };
    
    $(document).ready(main);

  </script>
  <script>
          $(document).ready(function()
  {
     
        $("#selecting").click(function(){
          $("#optionss").slideToggle();
        });
       
  });
       
       $(".btn1").bind("click" , function(){
        $("#inp").click();
       });
       document.getElementById("inp").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn2").bind("click" , function(){
        $("#inp2").click();
       });
       document.getElementById("inp2").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image2").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn3").bind("click" , function(){
        $("#inp3").click();
       });
       document.getElementById("inp3").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image3").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn4").bind("click" , function(){
        $("#inp4").click();
       });
       document.getElementById("inp4").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image4").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn5").bind("click" , function(){
        $("#inp5").click();
       });
       document.getElementById("inp5").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image5").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn6").bind("click" , function(){
        $("#inp6").click();
       });
       document.getElementById("inp6").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image6").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn7").bind("click" , function(){
        $("#inp7").click();
       });
       document.getElementById("inp7").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image7").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
$(".btn8").bind("click" , function(){
        $("#inp8").click();
       });
       document.getElementById("inp8").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image8").src = e.target.result; 
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};
/*$(".cat1").bind("click" , function(){
        $("#selecting").click();
       });
       document.getElementById("selecting").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("cat").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};*/
   
  </script>
</body>
</html>
                                            