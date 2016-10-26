<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../../includes/main_functions.php');
//checkUser();
$id = $_GET['id'];
$query = "SELECT * FROM items where post_id = '{$id}'";
$res = mysqli_query($con,$query); 
while($row = mysqli_fetch_assoc($res))
{
	if($row['refcat_id'] == 5)
	{
		require('estate-post.php');
		exit;
	}
	elseif ($row['refcat_id'] == 7)
	{
		require('job-post.php');
		exit;
	}
	else
	{
		require('usual-post.php');
		exit;
	}
}
