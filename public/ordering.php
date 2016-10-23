<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
if(checkIsStringSetPost('izina'))
{
  if(isset($_SESSION['id']))
   {  
	$izina = clearInput($_POST['izina']);
    $category = clearInput($_POST['subcategory']);
    $details = clearInput($_POST['details']);
    $location = clearInput($_POST['location']);
    $date = date("Y-m-d");
    $user = $_SESSION['id'];
    $sql = "INSERT INTO orders (tittle,category,details,user,place,up_date) values ('{$izina}','{$category}','{$details}','{$user}','{$location}','{$date}')";
    $r = mysqli_query($con,$sql);
    if($r)
    {
    	$query = "SELECT * from orders where tittle = '{$izina}' and details = '{$details}' and user = '{$user}' ";
    	$b = mysqli_query($con,$query);
    	$c = mysqli_fetch_assoc($b);
    	$id = $c['id'];
        echo "<script>alert(' Your order has been uploaded successfully');window.location='my_order.php?id='{$izina}'';</script>";exit;
    }
    else
    {
    	echo "<script>alert(' Failed to post your order, please try again');window.location='order.php';</script>";exit;
    }
   }
   else
   {
      $_SESSION['message'] = "Please login to your acount to make this order, or create your new acount";  
      $_SESSION['title'] = clearInput($_POST['izina']);
      $_SESSION['category'] = clearInput($_POST['subcategory']);
      $_SESSION['details'] = clearInput($_POST['details']);
      $_SESSION['location'] = clearInput($_POST['location']);
      $_SESSION['date'] = date("Y-m-d"); 
   	  echo "<script>alert('To make this order you need an acount with us, click ok to proceed');window.location='order-login.php;</script>";exit;
   }
}
else
{
	echo "<script>alert('Sorry, Please try again');window.location='order.php;</script>";exit;
}
?>