<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
$id = $_GET['id'];
$user = $_SESSION['id'];
$query = "SELECT * FROM items where post_id = '{$id}' and user = '$user'";
$res = mysqli_query($con,$query); 
while($row = mysqli_fetch_assoc($res)) 
{
	if($row['photo1'] == '')
	{
		require('post-one.php');
		exit;
	}
	elseif ($row['photo2'] == '')
	{
		require('post-two.php');
		exit;
	}
	elseif ($row['photo3'] == '')
	{
		require('post-three.php');
		exit;
	}
	elseif ($row['photo4'] == '')
	{
		require('post-four.php');
		exit;
	}	
	elseif ($row['photo5'] == '')
	{
		require('post-five.php');
		exit;
	}
	elseif ($row['photo6'] == '')
	{
		require('post-six.php');
		exit;
	}
	
}
