<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper"); 
include('../../includes/main_functions.php');
$id = $_GET['id'];
$query = "DELETE from orders where id = '{$id}'";
$res1 = mysqli_query($con,$query);
if($res1)
{   
	echo "<script>alert(' order deleted successfully ');window.location='orders.php';</script>";
}		
else
	echo "<script>alert(' Error, please try again ');window.location='order-view.php?id='{$id}'';</script>";exit;
	

?>