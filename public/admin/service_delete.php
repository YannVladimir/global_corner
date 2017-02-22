<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper"); 
include('../../includes/main_functions.php');
$id = $_GET['id'];
$sql = "SELECT * from amaservice where id = '{$id}'";
$r = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($r); 
$pathmain = '../assets/images/posts/' . $row['main'];
$path1 = '../assets/images/posts/' . $row['photo1'];
$path2 = '../assets/images/posts/' . $row['photo2'];
$path3 = '../assets/images/posts/' . $row['photo3'];
$path4 = '../assets/images/posts/' . $row['photo4'];
$path5 = '../assets/images/posts/' . $row['photo5'];
if ($row['main'])
{
	$pathmain = '../assets/images/posts/' . $row['main'];
}
if ($row['photo1'])
{
	$path1 = '../assets/images/posts/' . $row['photo1'];
}
if ($row['photo2'])
{
	$path2 = '../assets/images/posts/' . $row['photo2'];
}
if ($row['photo3'])
{
	$path3 = '../assets/images/posts/' . $row['photo3'];
}
if ($row['photo4'])
{
	$path4 = '../assets/images/posts/' . $row['photo4'];
}
if ($row['photo5'])
{
	$path5 = '../assets/images/posts/' . $row['photo5'];
}
$query = "DELETE from services where id = '{$id}'";
$res1 = mysqli_query($con,$query);
if($res1)
{   
    if (file_exists($pathmain))
	{				
		unlink($pathmain);
	}
	if (file_exists($path1))
	{				
		unlink($path1);
	}
	if (file_exists($path2))
	{				
		unlink($path2);
	}
	if (file_exists($path3))
	{				
		unlink($path3);
	}
	if (file_exists($path4))
	{				
		unlink($path4);
	}
	if (file_exists($path5))
	{				
		unlink($path5);
	}
	echo "<script>alert(' service deleted successfully ');window.location='dashboard.php';</script>";
}		
else
	echo "<script>alert(' Error, please try again ');window.location='dashboard.php';</script>";exit;
	

?>