<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
if(checkIsStringSetPost('type'))
{
	$type = $_POST['type']);
	$id = $_SESSION['photo_id'];
	$user = $_SESSION['id'];
	unset($_SESSION['photo_id']);
	if(isset($_FILES['main']))
    {
       $name= $_FILES['main']['name'];
       $size= $_FILES['main']['size'];
       $ext1 = explode(".", $name);
       $ext = end($ext1);
       $allowed_ext = array("png", "PNG", "jpeg", "JPEG", "JPG", "jpg");
       if(in_array($ext, $allowed_ext))
       {
          if($size < (4194304))
          {
            $new_image = '';
            $new_name = md5(rand()) . '.' . $ext;
            $path ='assets/images/posts/' . $new_name;
            list($width, $height) = getimagesize($_FILES['main']['tmp_name']);
             if($ext == 'png' || $ext =='PNG')
            {
              $new_image = imagecreatefrompng($_FILES['main']['tmp_name']);
            }
            if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
           {
             $new_image = imagecreatefromjpeg($_FILES['main']['tmp_name']);
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
          echo "<script>alert(' Failed to post this ad, image size must be less than 4MB');window.location='my_service.php?id=$id';</script>";exit;
        }
      }
      else
      {
        echo "<script>alert(' Failed to post this ad, please select only jpg,jpeg, and png images ');window.location='my_service.php?id=$id';</script>";exit;
      }

    }
    if ($type=='1')
    {
    	$query = "UPDATE services set main = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }	
    elseif($type=='2')
    {
    	$query = "UPDATE services set photo1 = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }
    elseif($type=='3')
    {
    	$query = "UPDATE services set photo2 = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }
    elseif($type=='4')
    {
    	$query = "UPDATE services set photo3 = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }
    elseif($type=='5')
    {
    	$query = "UPDATE services set photo4 = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }
    elseif($type=='6')
    {
    	$query = "UPDATE services set photo5 = '{$photo}' where id = '{$id}' and user = '{$user}'";
    }
    else
    {
    	echo "Please go back";
    }
    $res = mysqli_query($con,$query);
	if($res)
	{
				
        echo "<script>alert(' Image uploaded successfully ');window.location='my_service.php?id=$id';</script>";
	}
}

?>  