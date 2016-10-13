<?php 
include('../../includes/main_functions.php');
$id = $_POST['id'];
$query= "DELETE FROM users where user_id='{$id}'";
$res = mysqli_query($con,$query);
if($res)
{		
  echo "<script>alert(' User deleted successfully ');window.location='users.php';</script>";
}
else {
	
	echo "<script>alert(' Error while deleting ');window.location='users.php';</script>";
	    }

?>