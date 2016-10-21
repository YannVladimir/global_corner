<?php
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
checkToken();
if(checkIsStringSetPost('izina'))
{
   $category = clearInput($_POST['subcategory']);
   $company = clearInput($_POST['name']);
   $position = clearInput($_POST['izina']);
   $email = clearInput($_POST['email']);
   $details = clearInput($_POST['details']);
   $sector = clearInput($_POST['working_place']);
   $field = clearInput($_POST['field']);
   $exp = clearInput($_POST['experience']);
   $contacts = clearInput($_POST['contact']);
   $day = clearInput($_POST['day']);
   $month = clearInput($_POST['month']);
   $year = clearInput($_POST['year']);
   $uploaded = date("Y-m-d");
   $deadline = $year.'-'.$month.'-'.$day;
   $place = 1;
   if(isset($_SESSION['id']))
   {
	$user = $_SESSION['id'];
   }
   else
   {
	$user = 1;
   }

   if(isset($_FILES['logo']))
   {
    $name= $_FILES['logo']['name'];
    $size= $_FILES['logo']['size'];
    $ext1 = explode(".", $name);
    $ext = end($ext1);
    $allowed_ext = array("png", "jpeg", "jpg");
    if(in_array($ext, $allowed_ext))
    {
      if($size < (2097152))
      {
        $new_image = '';
        $new_name = md5(rand()) . '.' . $ext;
        $path ='assets/images/posts/' . $new_name;
        list($width, $height) = getimagesize($_FILES['logo']['tmp_name']);
        if($ext == 'png')
        {
 	      $new_image = imagecreatefrompng($_FILES['logo']['tmp_name']);
        }
        if($ext == 'jpeg' || $ext == 'jpg')
        {
 	      $new_image = imagecreatefromjpeg($_FILES['logo']['tmp_name']);
        }
        $new_height = 300;
        $new_width = ($width/$height)*300;
        $tmp_image = imagecreatetruecolor($new_width, $new_height);
        imagecopyresampled($tmp_image, $new_image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
        imagejpeg($tmp_image, $path, 100);
        $photo = $new_name;
        imagedestroy($new_image);
        imagedestroy($tmp_image);
      }
      else
      {
       echo "<script>alert(' image size must be less than 2MB ');window.location='upload_jobs.php';</script>";exit;
      }
    }
    else
    {
      echo "<script>alert(' invalid image file 1');window.location='upload_jobs.php';</script>";exit;
    }

   }
	
	
  }
  else
  {
    echo "<script>alert(' Please provide all inputs, including the logo ');window.location='upload_jobs.php';</script>";exit;
  }
  $sql = "INSERT INTO post_photos (main) values ('{$photo}')";
  $r = mysqli_query($con,$sql);
  if($r)
  {
    $q = "SELECT * from post_photos";
    $r1 = mysqli_query($con,$q);
    while($row = mysqli_fetch_assoc($r1))
    {
      if($row['main']==$photo)
      {
        $j = $row['photo_id'];
        $querry = "INSERT INTO posts (place,category,user,seller,company_name,job_position,details,sector,contacts,uploaded_date,deadline,photo,logo,experience,required_field) values ('{$place}','{$category}','{$user}','{$company}','{$email}','{$position}','{$details}','{$sector}','{$contacts}','{$uploaded}','{$deadline}','{$j}','{$photo}','{$exp}','{$field}')";
        $res = mysqli_query($con,$querry);
        if($res)
        {
         echo "<script>alert(' Your post has been uploaded successfully, we thank you ');window.location='home.php';</script>";exit;
        }
        else
        {
        echo mysqli_error($con);
        //echo "<script>alert(' Error while uploading post, please try again ');window.location='upload_jobs.php';</script>";exit;
        }
      }
      else
        echo mysqli_error($con);
    }
    
  }
  else 
    echo mysqli_error($con);
  
?>