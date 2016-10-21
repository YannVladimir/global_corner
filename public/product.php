<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
$id = $_GET['id'];
$query = "SELECT * FROM items where post_id = '{$id}' and is_accepted = 1";
$res = mysqli_query($con,$query); 
while($row = mysqli_fetch_assoc($res))
{
	if($row['photo1'] == '')
	{
		require('product_one.php');
		exit;
	}
	elseif ($row['photo2'] == '')
	{
		require('product_two.php');
		exit;
	}
	elseif ($row['photo3'] == '')
	{
		require('product_three.php');
		exit;
	}
	elseif ($row['photo4'] == '')
	{
		require('product_four.php');
		exit;
	}	
	elseif ($row['photo5'] == '')
	{
		require('product_five.php');
		exit;
	}
	elseif ($row['photo6'] == '')
	{
		require('product_six.php');
		exit;
	}
	
}
