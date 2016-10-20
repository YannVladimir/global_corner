<?php 
    ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
	$id = $_POST['id'];
	$query = "UPDATE contactus set seen = 1 where id ='{$id}'";
	$res = mysqli_query($con,$query);
	if($res)
	{
     echo "<script>alert(' message marked as seen ');window.location='messages.php';</script>";
  	}
	else
	echo "<script>alert('Sorry, it seems like the re is a problem while marking as seen');window.location='messages.php';</script>";
	
?>