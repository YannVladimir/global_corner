<?php 
include('../includes/main_functions.php');
if(checkIsStringSetPost('firstname'))
{
   	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];		
	$email = $_POST['email'];
	$number = $_POST['contact'];
	$password = substr(md5(rand()),0,7);
	$date = date("Y-m-d");
	$query = "INSERT INTO users (firstname,lastname,email,phone,password,joined,is_admin,accepted) values ('{$firstname}','{$lastname}','{$email}','{$number}','{$password}','{$date}',1,1)";
	$res = mysqli_query($con,$query);
	if($res)
	{
	  echo "<script>alert(' Admin created ');window.location='dashboard.php';</script>";
	}
	else
	   echo "<script>alert(' Error ');window.location='new-admin.php';</script>";
}
else
echo echo "<script>alert(' Error, please provide inputs');window.location='new-admin.php';</script>";
?>