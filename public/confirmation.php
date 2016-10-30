<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
//checkUser();
$email=$_GET['email'];
$confirm=$_GET['code'];
$query = "SELECT * from users where email = '{$email}' and confirm_code = '{$confirm}'";
$res = mysqli_query($con,$query);
if ($res)
{
  $row = mysqli_fetch_assoc($res);
  $password = $row['password'];
  $email = $row['email'];
  $sql = "UPDATE users set confirmed = 1 where email = '{$email}' and confirm_code = '{$confirm} ";
  $d = mysqli_query($sql);
  if ($d)
  {
      echo "<script>alert(' Email confirmation done successfully')</script>";
    log_user_in($email, $password);
  }
}
else {
  $_SESSION['message']= "error while verifying your email,  please try again";
   echo "<script>alert('not done, please try again');window.location='login.php';</script>";exit;
 } 
?>