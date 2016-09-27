<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload Item | Get It</title>
    <link href="<?php echo BASEURL."../assets/font-awesome/css/font-awesome.min.css"; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASEURL."../assets/css/yann.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/prettyPhoto.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/price-range.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/animate.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/main.css"; ?>" rel="stylesheet">
    <link href="<?php echo BASEURL."../assets/css/responsive.css"; ?>" rel="stylesheet">
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
      .hide{
        display: none;
      }
      .starting{
        cursor: pointer;
        background: url('<?php echo BASEURL."../assets/images/upload.jpg"; ?>')center center no-repeat;
        width:100px;
        height: 85px;
        border:3px;
        margin-left: 8px;
      }
      
      .btnlocation{
        cursor: pointer;
        background: url('<?php echo BASEURL."../assets/images/upload.jpg"; ?>')center center no-repeat;
        width:100px;
        height: 85px;
        margin-left: 5px;
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
                <li><a href="<?php echo BASEURL; ?>upload_electronics" class="active">Sell</a></li>
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
                               <button type="button" class="btn btn-default dropdown-toggle country" data-toggle="dropdown">
                                  Mobiles
                                  <span class="caret"></span>
                               </button>
                               <ul class="dropdown-menu">
                                  <li><a href="upload_electronics">Electronic materials</a></li>
                                  <li><a href="upload_furnitures">Furnitures</a></li>
                                  <li><a href="upload_fashion">Fashion</a></li>
                                  <li><a href="upload_sports">Sports & Hobbies</a></li>
                                  <li><a href="upload_cars">Cars & Bikes</a></li>
                                  <li><a href="upload_estates">Real Estates</a></li>
                                  <li><a href="upload_jobs">Jobs</a></li>
                               </ul>
                            </div>
                          </div>
                  <br><br><br>
                  <div id="electronics">
                    <form action="uploadingprocess" id="" class="upload-form row" name="upload-form" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-12">
                             <input type="text" name="izina" class="form-control" required="required" placeholder="Ad title">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <select class="form-control" name="subcategory" required="required">
                                 <option>Select sub-category</option>
                                 <?php 
                                    $cat = new Subcategory();
                                    $res = $cat->selectAllSubCat();
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                       if($row['refcat_id']==4)
                                       echo "<option value='{$row['subcat_id']}'>{$row['subcat_name']}</option>";
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" name="price" class="form-control" required="required" placeholder="Price">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="details" id="message" required="required" class="form-control" rows="8" placeholder="Description of the product, Include the brand, model, warranty, guarranty, age and any other included accessories"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <div> 
                                  <input type="file" name="main" id="inp" class="hide"/>
                                  <img id="image" class="btn1 starting" />
                                  <input type="file" name="img1" id="inp2" class="hide"/>
                                  <img id="image2" class="btn2 btnlocation" />
                                  <input type="file" name="img2" id="inp3" class="hide"/>
                                  <img id="image3" class="btn3 btnlocation" />
                                  <input type="file" name="img3" id="inp4" class="hide"/>
                                  <img id="image4" class="btn4 btnlocation" />
                                  <input type="file" name="img4" id="inp5" class="hide"/>
                                  <img id="image5" class="btn5 starting" />
                                  <input type="file" name="img5" id="inp6" class="hide"/>
                                  <img id="image6" class="btn6 btnlocation hide" />
                                  <input type="file" name="img6" id="inp7" class="hide"/>
                                  <img id="image7" class="btn7 btnlocation hide" />
                                  <input type="file" name="img7" id="inp8" class="hide"/>
                                  <img id="image8" class="btn8 btnlocation hide" />
                            </div>
                        </div> 
                        <div class="form-group col-md-6">
                           <input type="text" name="name" class="form-control" required="required" placeholder="Seller Name">
                        </div> 
                        <div class="form-group col-md-6">
                           <input type="text" name="contact" class="form-control" required="required" placeholder="Phone Number">
                        </div> 
                        <div class="form-group col-md-12">
                          <select class="form-control" name="location" required="required">
                             <option>Seller location</option>
                                <?php 
                                   $pla = new Places();
                                   $res = $pla->selectAllPlace();
                                   while($row = mysqli_fetch_assoc($res))
                                   {
                                      echo "<option value='{$row['place_id']}'>{$row['place_name']}</option>";
                                   } 
                                ?>
                          </select>
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
      require(BASEPATH.'app/views/public/footer.php');    
  ?>
  <script src="<?php echo BASEURL."../assets/js/jquery.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/yann.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.scrollUp.min.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.prettyPhoto.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/main.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/jquery.validate.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/uploading.js"; ?>"></script>
  <script src="<?php echo BASEURL."../assets/js/image.upload.js"; ?>"></script>
</body>
</html>
                                            