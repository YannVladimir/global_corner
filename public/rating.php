<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
if(checkIsStringSetPost('marks'))
{
	if(isset($_SESSION['id']))
	{
			$name = $_SESSION['username'];
			$contacts =$_SESSION['phone'];
			$user_id = $_SESSION['id'];
			
		    
	}
	else
	{  
			$name = clearInput($_POST['name']);
		    $contacts = clearInput($_POST['contacts']);
		    $user_id = 0;
		    
	}
	$mdate= date("Y-m-d");
	$id=$_SESSION['rate_id'];
	unset($_SESSION['rate_id']);
    $details = clearInput($_POST['details']);
	$marks = clearInput($_POST['marks']);
	$query = "INSERT INTO votes (service_id,user,name,contacts,experience,marks,vote_date) values ('{$id}','{$user_id}','{$name}','{$contacts}','{$details}','{$marks}','{$mdate}')";
	$res = mysqli_query($con,$query);
	if($res)
	{
				
        echo "<script>alert(' Your rate and experience was successfully submited ');window.location='service.php?id=$id;</script>";
	}
	else
	{
		echo "<script>alert(' An error has occured while submitting your rate and experience, Please try again');window.location='service.php?id=$id';</script>";
    }
}

?>