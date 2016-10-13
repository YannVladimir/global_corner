<?php 
    include('../../includes/main_functions.php');
	$id = $_POST['id'];
	$query = "UPDATE contactus set seen = 1 where id ='{$id}'";
	$res = mysqli_query($con,$query);
	if($res)
	{
     echo "<script>alert(' message marked as seen ');window.location='messages.php';</script>";
  	}
	else
	echo "<script>alert('Sorry, it seems like the re is a problem while marking as seen');window.location='messages.php';</script>";
	
?>