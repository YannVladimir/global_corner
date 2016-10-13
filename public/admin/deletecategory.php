<?php 
include('../../includes/main_functions.php');
$id = $_POST['id'];
$query= "DELETE FROM categories where cat_id='{$id}'";			
$res = mysqli_query($con,$query);
if($res)			
{     echo "<script>alert(' Category deleted successfully ');window.location='dashboard.php';</script>";exit;
}
		else
			echo "<script>alert(' Error, please try again ');window.location='delete-category.php';</script>";exit;
?>