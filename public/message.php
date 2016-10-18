<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
if (isset($_POST['submit']))
{	
	if(isset($_SESSION['email'])
	{
			$username = $_SESSION['username'];
			$email = $_SESSION['email'];
			$contacts =$_SESSION['phone'];
			$subject = clearInput($_POST['subject']);
			$contents = clearInput($_POST['message']);
			$user_id = $_SESSION['id'];
			$mdate= date("Y-m-d");
			
		    
	}
	else
	{  
			$username = clearInput($_POST['name']);
		    $email = clearInput($_POST['email']);
		    $contacts = clearInput($_POST['number']);
		    $contents = clearInput($_POST['message']);
		    $subject = clearInput($_POST['subject']);
		    $user_id = 0;
		    $mdate= date("Y-m-d");
	}
		$query = "INSERT INTO contactus (user_id,name,email,phone,subject,message,received_date) values ('{$user_id}','{$username}','{$email}','{$contacts}','{$subject}','{$contents}','{$mdate}')";
			$res = mysqli_query($con,$query);
	if($res)
	{
				
                echo "<script>alert(' Thank you for contacting us ');window.location='home.php';</script>";
	}
	else
	{
			echo "<script>alert(' An error has occured while contacting us, Please try again');window.location='contact_us.php';</script>";
    }
}
else 
{
	echo "<script>alert(' An error has occured, Please try again');window.location='contact_us.php';</script>";
}

?>