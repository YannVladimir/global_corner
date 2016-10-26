<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
$id = $_GET['id'];
$query= "UPDATE orders set is_accepted = 1 where id='{$id}'";
$res = mysqli_query($con,$query);
if($res)
{	
  echo "<script>alert(' Order accepted ');window.location='orders.php';</script>";
}
else
  //echo "<script>alert('Sorry, it seems like there is a problem');window.location='posts.php';</script>";	
  echo mysqli_error($con);
?>