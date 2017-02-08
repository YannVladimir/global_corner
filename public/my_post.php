<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
/*if(!isset($_SESSION['id']))
{
  $id = $_GET['id'];
  $_SESSION['message'] = 'Please log in to your acount to continue';
  $_SESSION['page'] = 'my_post'; 
  require_once ('login.php?id=$id');
  exit;
} */
$id = $_GET['id']; 
$query = "SELECT * FROM items where post_id = '{$id}'";
$res = mysqli_query($con,$query); 
while($row = mysqli_fetch_assoc($res)) 
{
	if($row['photo1'] == '' || $row['photo1'] == 'error')
	{
		require('post-one.php');
		exit;
	}
	elseif ($row['photo2'] == '' || $row['photo2'] == 'error')
	{
		require('post-two.php');
		exit;
	}
	elseif ($row['photo3'] == '' || $row['photo3'] == 'error')
	{
		require('post-three.php');
		exit;
	}
	elseif ($row['photo4'] == '' || $row['photo4'] == 'error')
	{
		require('post-four.php');
		exit;
	}	
	elseif ($row['photo5'] == '' || $row['photo5'] == 'error')
	{
		require('post-five.php');
		exit;
	}
	elseif ($row['photo6'] == '' || $row['photo6'] == 'error')
	{
		require('post-six.php');
		exit;
	}
	
}
