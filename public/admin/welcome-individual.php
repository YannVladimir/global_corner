<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
$id = $_POST['id'];
$query = "UPDATE users set accepted=1 where user_id ='{$id}'";
$res = mysqli_query($con,$query);
if($res)			
{	
 echo "<script>alert(' User Welcomed ');window.location='new-users.php';</script>";
}
else
echo "<script>alert('Sorry, it seems like the re is a problem while welcoming the user');window.location='new-users.php';</script>";
?>