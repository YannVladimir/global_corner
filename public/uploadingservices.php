<?php

session_start();
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
 //checkToken();
if(checkIsStringSetPost('izina'))
{
  if(isset($_SESSION['id']))
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
    $user = $_SESSION['id'];
    $querry = "INSERT INTO services (title,reserved,sub_category,phone,contacts,user,location,akarere,details,uploaded_date) values ('{$nam}','{$seller}','{$category}','{$phone}','{$email}','{$user}','{$place}','{$location}','{$details}','{$uploaded}')";
    $res = mysqli_query($con,$querry);
    if($res)
    {
        $q = "UPDATE users set sell_service ='{$category}' where user_id ='{$user}'";
        $r = mysqli_query($con,$q);
        $p = "SELECT * from services where user = '{$user}' and title = '{$nam}' and reserved = '{$seller}' and details = '{$details}'";
        $pe = mysqli_query($con,$p);
        $pes = mysqli_fetch_assoc($pe);
        $a = $pes['id'];
        echo "<script>alert(' Your post has been uploaded successfully, we thank you by the time we are looking for a customer of your service ');window.location='my_service.php?id=$a';</script>";exit;
    }
    else
    {
        echo "<script>alert(' Error while uploading post, please try again ');window.location='upload_services?id={$_GET['id']}.php';</script>";exit;
    }   
}
   else
   {
      /*$user
      $category = clearInput($_POST['service_category']);
    $seller = clearInput($_POST['name']);
    $nam = clearInput($_POST['izina']);
    $email = clearInput($_POST['email']);
    $details = clearInput($_POST['details']);
    $place = clearInput($_POST['place']);
    $location = clearInput($_POST['location']);
    $phone = clearInput($_POST['phone']);
    $uploaded = date("Y-m-d");*/
      $_SESSION['message'] = "Please login to your acount to make this service post, or create your new acount";  
      $_SESSION['nam'] = clearInput($_POST['izina']);
      $_SESSION['category'] = clearInput($_POST['service_category']);
      $_SESSION['details'] = clearInput($_POST['details']);
      $_SESSION['location'] = clearInput($_POST['location']);
      $_SESSION['seller'] = clearInput($_POST['name']);
      $_SESSION['emails'] = clearInput($_POST['email']);
      $_SESSION['place'] = clearInput($_POST['place']);
      $_SESSION['phones'] = clearInput($_POST['phone']);
      echo "<script>alert('To make this post you need an acount with us, click ok to proceed');window.location='service-login.php';</script>";exit;
   }
}
else
{
    echo "Please go back";
} 
?>