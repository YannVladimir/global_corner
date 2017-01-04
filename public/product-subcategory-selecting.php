<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
$user = $_SESSION['id'];
$id = $_GET['id'];
$type = $_SESSION['sell-or-buy'];
unset($_SESSION['sell-or-buy']);
if ($type<2)
{
   if($type == 0)
   {
     $query = "UPDATE users set buy_product = '{$id}' where user_id = '{$user}'";
   }
   else 
   {
     $query = "UPDATE users set sell_product = '{$id}' where user_id = '{$user}'";
   }
   $res = mysqli_query($con,$query);
   if($res)
   {
      echo "<script>alert(' Wanna trade product category updated successfuly ');window.location='my_acount.php#choosing';</script>";
   }
   else
   {
      echo "<script>alert(' An error has occured while updating wanna trade, Please try again');window.location='my_acount.php#choosing';</script>";
    }	
}
else
{
	if($type == 3)
   {
     $query = "UPDATE users set buy_service = '{$id}' where user_id = '{$user}'";
   }
   else 
   {
     $query = "UPDATE users set sell_service = '{$id}' where user_id = '{$user}'";
   }
   $res = mysqli_query($con,$query);
   if($res)
   {
      echo "<script>alert(' Wanna trade service category updated successfuly ');window.location='my_acount.php#choosing';</script>";
   }
   else
   {
      echo "<script>alert(' An error has occured while updating wanna trade, Please try again');window.location='my_acount.php#choosing';</script>";
    }
}

?>