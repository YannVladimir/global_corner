<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
if(checkIsStringSetPost('email'))
{
$email = clearInput($_POST['email']);
$date =  date("Y-m-d");
$query = "INSERT INTO saved_emails (email,up_date) values ('{$email}','{$date}')";
	$res = mysqli_query($con,$query);
	if($res)
	{
				
        echo "<script>alert(' Thank you dear user, from now you will receive updates of our website on your email acount ');window.location='index.php';</script>";
	}
	else
	{
		echo "<script>alert(' An error has occured while submiting your email, Please try again');window.location='index.php#newsletter';</script>";
    }
}

?>