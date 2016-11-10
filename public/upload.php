<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once ('../includes/main_functions.php');
//checkUser();
if(isset($_GET['id'])){
$id = $_GET['id'];
if($id==7)
  {
    require('upload_services.php');
    exit;
  }
elseif ($id ==5)
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