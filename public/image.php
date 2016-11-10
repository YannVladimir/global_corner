<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once ('../includes/main_functions.php');
if(isset($_FILES['image-upload']))
{
    $name= $_FILES['image-upload']['name'];
    $size= $_FILES['image-upload']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "jpeg", "jpg");
    if(in_array($ext, $allowed_ext))
    {
      if($size < (4194304))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='assets/images/posts/' . $new_name;
        list($width, $height) = getimagesize($_FILES['image-upload']['tmp_name']);
        if($ext == 'png')
        {
 	      $new_image = imagecreatefrompng($_FILES['image-upload']['tmp_name']);
        }
        if($ext == 'jpeg' || $ext == 'jpg')
        {
 	      $new_image = imagecreatefromjpeg($_FILES['image-upload']['tmp_name']);
        }
        $new_height = 300;
        $new_width = ($width/$height)*300;
        $tmp_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($tmp_image, $path, 100);
        imagedestroy($new_image);
        imagedestroy($tmp_image);
        $_SESSION['file']=$new_name;
        $_SESSION['path']='<img id="image1" src="'.$path.'"/>';
        require('upload_estates_copy.php');
      }
      else
      {
        $_SESSION['img-message']="image size must be less than 4MB";
        require('upload_estates_copy.php');
      }
    }
    else
    {
      $_SESSION['img-message']="invalid image file";
        require('upload_estates_copy.php');
      
    }

}
else
{
  $_SESSION['img-message']="please select some file";
        require('upload_estates_copy.php');
}
?>