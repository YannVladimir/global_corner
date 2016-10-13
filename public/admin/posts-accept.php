<?php 
include('../../includes/main_functions.php');
$id = $_GET['id'];
$query= "UPDATE posts set is_accepted = 1 where post_id='{$id}'";
$res = mysqli_query($con,$query);
if($res)
{	
  echo "<script>alert(' post accepted ');window.location='posts.php';</script>";
}
else
  echo "<script>alert('Sorry, it seems like there is a problem');window.location='posts.php';</script>";	
?>