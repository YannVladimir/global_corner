<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper"); 
include('../../includes/main_functions.php');
$categoryname = $_POST['name'];
$id = $_POST['id'];
if(isset($_FILES['img']))
{
 $name= $_FILES['img']['name'];
  $size= $_FILES['img']['size'];
 $ext1 = explode(".", $name);
		    $ext = end($ext1);
		    $allowed_ext = array("png", "jpeg", "jpg");
		    if(in_array($ext, $allowed_ext))
		    {
			    if($size < (1024*1024))
			    {
                    $new_image = '';
                    $new_name = md5(rand()) . '.' . $ext;
                    $path ='../assets/images/categories/' . $new_name;
                    list($width, $height) = getimagesize($_FILES['img']['tmp_name']);
                    if($ext == 'png')
                    {
                	   $new_image = imagecreatefrompng($_FILES['img']['tmp_name']);
                    }
                    if($ext == 'jpeg' || $ext == 'jpg')
                    {
                	   $new_image = imagecreatefromjpeg($_FILES['img']['tmp_name']);
                    }
                    $new_width = 300;
                    $new_height = ($height/$width)*300;
                    $tmp_image = imagecreatetruecolor($new_width, $new_height);
                    imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    imagejpeg($tmp_image, $path, 100);
                    $photo = $new_name;
                    imagedestroy($new_image);
                    imagedestroy($tmp_image);
			    }
                else
			    {
				    echo "<script>alert(' image size must be less than 1MB ');window.location='edit-category.php';</script>";exit;
			    }
		    }
		    else
		    {
			    echo "<script>alert(' invalid image file ');window.location='edit-category.php';</script>";exit;
		    }
		
	    }
	    $s = "SELECT * from categories where cat_id ='{$id}'";
	    $re = mysqli_query($con,$s);
	    $ros = mysqli_fetch_assoc($re);
	    $pathdelete = '../assets/images/categories/' . $ros['cat_image'];
		$queryy = "UPDATE categories set cat_name='{$categoryname}',cat_image='{$photo}' where cat_id ='{$id}'";
		$res1 = mysqli_query($con,$queryy);
		if($res1)
			{   
				if (file_exists($pathdelete))
				{
					unlink($pathdelete);
				    echo "<script>alert(' Category edited successfully ');window.location='dashboard.php';</script>";
				}
				else
				{
					echo "<script>alert(' Category edited successfully, but the previous image was not deleted successfully');window.location='dashboard.php';</script>";
				}
            }
		else
			echo "<script>alert(' Error, please try again ');window.location='edit-category.php';</script>";exit;
	

?>