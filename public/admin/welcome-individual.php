<?php
include('../../includes/main_functions.php');
$id = $_POST['id'];
$query = "UPDATE users set is_accepted = 1 where user_id ='{$id}'";
$res = mysqli_query($con,$query);
if($res)			
{	
 echo "<script>alert(' User Welcomed ');window.location='new-users.php';</script>";
}
else
echo "<script>alert('Sorry, it seems like the re is a problem while welcoming the user');window.location='new-users.php';</script>";
?>