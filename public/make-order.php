<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once ('../includes/main_functions.php');
//checkUser();
if(isset($_GET['id']))
{
   $id = $_GET['id'];
   $_SESSION['cat_id'] = $id;
   if($id==7)
   {
    require('order.php');
    exit;
  }
  else
  {
    require('oder-product.php');
    exit;
  } 
}
else
{
  require('order.php');
  exit;
}
?>