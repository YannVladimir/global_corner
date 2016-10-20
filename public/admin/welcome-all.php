<?php 
include('../../includes/main_functions.php');
$query = "UPDATE users set is_accepted = 1 where accepted = 0";
$res = mysqli_query($con,$query);
if($res)
{
	echo "<script>alert(' Users Welcomed ');window.location='users.php';</script>";
}
else
{
   echo "<script>alert('Sorry, it seems like the re is a problem while welcoming users');window.location='users.php';</script>";
}	
?>