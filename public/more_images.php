<?php 

session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkToken();
if(isset($_GET['id']))
{
$d = $_GET['id'];
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
            $query = "INSERT INTO more_images (service_id,image) values ('{$id}','{$photo}')";
            $res =  mysqli_query($con,$query);
            if($res)
            {
              echo "<script>alert(' Image uploade successfully ');window.location='my_service.php?id=$d';</script>";exit;
            }
            else
            {
              echo "<script>alert(' Erro, Please try again ');window.location='my_service.php?id=$d';</script>";exit;
            }
         }
         else
         {
            echo "<script>alert(' Error: Image size is too large ');window.location='my_service.php?id=$d';</script>";exit;
         }
        }
        else
        {
          echo "<script>alert(' Error: Invalid file extension ');window.location='my_service.php?id=$d';</script>";exit;
        }
    }
    
}
?>