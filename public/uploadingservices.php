<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkToken();
if(checkIsStringSetPost('izina'))
{
$category = clearInput($_POST['service_category']);
$seller = clearInput($_POST['name']);
$nam = clearInput($_POST['izina']);
$email = clearInput($_POST['email']);
$details = clearInput($_POST['details']);
$place = clearInput($_POST['place']);
$location = clearInput($_POST['location']);
$phone = clearInput($_POST['phone']);
$uploaded = date("Y-m-d");
if(isset($_SESSION['id']))
{
	$user = $_SESSION['id'];
}
else
{
	$user = 1;
}

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
        $new_width = 350;
        $new_height = ($height/$width)*350;
        $tmp_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($tmp_image, $path, 100);
        $photo = $new_name;
        imagedestroy($new_image);
        imagedestroy($tmp_image);
      }
      else
      {
        $photo = 'error';
      }
    }
    else
    {
        $photo = 'error';
    }

}
if(isset($_FILES['img1']))
{
    $name= $_FILES['img1']['name'];
    $size= $_FILES['img1']['size'];
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
     list($width, $height) = getimagesize($_FILES['img1']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img1']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img1']['tmp_name']);
     }
     $new_width = 350;
     $new_height = ($width/$height)*350;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img1 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      {
        $img1 = 'error';
     }
    }
    else
    {
        $img1 = 'error';
    }

}
if(isset($_FILES['img2']))
{
    $name= $_FILES['img2']['name'];
    $size= $_FILES['img2']['size'];
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
     list($width, $height) = getimagesize($_FILES['img2']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img2']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img2']['tmp_name']);
     }
     $new_width = 350;
     $new_height = ($height/$width)*350;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img2 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
else
      {
        $img2 = 'error';
    }
    }
    else
    {
        $img2 = 'error';
    }

}
if(isset($_FILES['img3']))
{
    $name= $_FILES['img3']['name'];
    $size= $_FILES['img3']['size'];
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
     list($width, $height) = getimagesize($_FILES['img3']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img3']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img3']['tmp_name']);
     }
     $new_width = 350;
     $new_height = ($height/$width)*350;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img3 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      {
        $img3 = 'error';}
    }
    else
    {
        $img3 = 'error';
    }

}
if(isset($_FILES['img4']))
{
    $name= $_FILES['img4']['name'];
    $size= $_FILES['img4']['size'];
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
     list($width, $height) = getimagesize($_FILES['img4']['tmp_name']);
     if($ext == 'png' || $ext =='PNG')
     {
       $new_image = imagecreatefrompng($_FILES['img4']['tmp_name']);
     }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img4']['tmp_name']);
     }
     $new_width = 350;
     $new_height = ($height/$width)*350;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img4 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
else
      {
        $img4 = 'error';
    }
    }
    else
    {
        $img4 = 'error';
    }

}

if(isset($_FILES['img5']))
{
    $name= $_FILES['img5']['name'];
    $size= $_FILES['img5']['size'];
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
        list($width, $height) = getimagesize($_FILES['img5']['tmp_name']);
        if($ext == 'png' || $ext =='PNG')
        {
          $new_image = imagecreatefrompng($_FILES['img5']['tmp_name']);
        }
     if($ext == 'jpeg' || $ext == 'jpg' || $ext == 'JPEG' || $ext == 'JPG')
     {
       $new_image = imagecreatefromjpeg($_FILES['img5']['tmp_name']);
     }
     $new_width = 350;
     $new_height = ($height/$width)*350;
     $tmp_image = imagecreatetruecolor($new_width, $new_height);
     imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
     imagejpeg($tmp_image, $path, 100);
     $img5 = $new_name;
     imagedestroy($new_image);
     imagedestroy($tmp_image);
}
 else
      { 
        $img5 = 'error';
    }
    }
    else
    {
        $img5 = 'error';
    }

}
 $querry = "INSERT INTO services (title,reserved,sub_category,phone,contacts,user,location,akarere,details,uploaded_date,main,photo1,photo2,photo3,photo4,photo5) values ('{$nam}','{$seller}','{$category}','{$phone}','{$email}','{$user}','{$place}','{$location}','{$details}','{$uploaded}','{$photo}','{$img1}','{$img2}','{$img3}','{$img4}','{$img5}')";
 $res = mysqli_query($con,$querry);
  if($res)
 {
     echo "<script>alert(' Your post has been uploaded successfully, we thank you by the time we are looking for a customer of your service ');window.location='home.php';</script>";exit;
 }
 else
 {
     echo "<script>alert(' Error while uploading post, please try again ');window.location='upload_services?id={$_GET['id']}.php';</script>";exit;
 }   
}
    
    
}
else
{
    echo "Please go back";
}
?>