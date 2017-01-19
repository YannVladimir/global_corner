<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
if(isset($_SESSION['id']))
{
    $service = $_POST['id'];
    $day = $_POST['day'];
    if($day=='monday')
    {
      $contents = clearInput($_POST['monday']);
      $query = "UPDATE working_hours set monday = '{$contents}' where service_id = '{$service}'";	
    }
    elseif ($day=='tuesday') 
    {
    	$contents = clearInput($_POST['tuesday']);
      $query = "UPDATE working_hours set tuesday = '{$contents}' where service_id = '{$service}'";
    }
    elseif ($day=='wednesday') 
    {
    	$contents = clearInput($_POST['wednesday']);
      $query = "UPDATE working_hours set wednesday = '{$contents}' where service_id = '{$service}'";
    }
    elseif ($day=='thursday') 
    {
    	$contents = clearInput($_POST['thursday']);
      $query = "UPDATE working_hours set thursday = '{$contents}' where service_id = '{$service}'";
    }
    elseif ($day=='friday') 
    {
    	$contents = clearInput($_POST['friday']);
      $query = "UPDATE working_hours set friday = '{$contents}' where service_id = '{$service}'";
    }
    elseif ($day=='saturday') 
    {
    	$contents = clearInput($_POST['saturday']);
      $query = "UPDATE working_hours set saturday = '{$contents}' where service_id = '{$service}'";
    }
    elseif ($day=='sunday') 
    {
    	$contents = clearInput($_POST['sunday']);
        $query = "UPDATE working_hours set sunday = '{$contents}' where service_id = '{$service}'";
    }
	$res = mysqli_query($con,$query);
	if($res)
	{
				
        echo "<script>alert(' Working hours updated successfully ');window.location='my_service.php?id=$service';</script>";
	}
	else
	{
		echo "<script>alert(' An error has occured while making the updates, Please try again');window.location='my_service.php?id=$service';</script>";
    }
}

?>