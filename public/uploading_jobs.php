<?php
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
//checkToken();
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
   $photo = clearInput($_POST['logo']);
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
   $b = mt_rand();
   $q = "INSERT INTO post_photos (main) values ('{$b}')";
   $d = mysqli_query($con,$q);
   if($d)
   {
    $k = "SELECT * FROM post_photos where main = '{$b}'";
    $g = mysqli_query($con,$k);
    $gow = mysqli_fetch_assoc(g);
    $j = $gow['photo_id'];
      $querry = "INSERT INTO posts (place,category,user,seller,company_name,job_position,details,sector,contacts,uploaded_date,deadline,logo,experience,required_field,photo) values ('{$place}','{$category}','{$user}','{$company}','{$email}','{$position}','{$details}','{$sector}','{$contacts}','{$uploaded}','{$deadline}','{$photo}','{$exp}','{$field}','{$j}')";
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
     
   }
   else
        {
        echo mysqli_error($con);
        //echo "<script>alert(' Error while uploading post, please try again ');window.location='upload_jobs.php';</script>";exit;
        }
   
}
  else
  {
    echo "<script>alert(' Please provide all inputs, including the logo ');window.location='upload_jobs.php';</script>";exit;
  }
?>