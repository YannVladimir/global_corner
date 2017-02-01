<?php 
require_once ('../includes/main_functions.php');
//checkUser();
if(isset($_GET['id'])){
$id = $_GET['id'];
$_SESSION['cat_id'] = $id;
if($id==7)
  {
    session_start();
    if(isset($_SESSION['id']))
    {
       require('upload_service.php');
       exit;  
    }
    else
    {
      $_SESSION['message'] = 'Please enter in your store or create a new store to make your ad';
      require('service-login.php');
      exit;
    }
    
  }
elseif ($id == 5)
  {
    require('upload_estates_copy.php');
    exit;
  }
else
  {
    require('upload_fashion.php');
    exit;
  } 
}
else
{
  require('upload_cars.php');
  exit;
}
?>