<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
checkUser();
checkToken();
if(checkIsStringSetPost('firstname') && checkIsStringSetPost('email'))
{
  $firstname = clearInput($_POST['firstname']);
  $lastname = clearInput($_POST['lastname']);
  $email = clearInput($_POST['email']);
  $number = clearInput($_POST['phone']);
  $pass = clearInput($_POST['pass']);
  $password = clearInput($_POST['password']);
  if($_POST['password']!= $_POST['repassword'])
  {
  	echo "<script>alert('the entered password and re type password must be match, please try again');window.location='loginpage.php';</script>";exit;
  }

  $query="SELECT * from users";
  $check = mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($check))
  {
  	if($email==$row['email'] && $email<>$_SESSION['email'])
  	{
                echo "<script>alert(' The entered email arleady has a store, please try again with different email or try to login with your previous store');window.location='edit_my_acount.php';</script>";exit;
  	}
  }

  $id = $_SESSION['id'];
  $sql = "SELECT * from users where user_id = '{$id}'";
  $sql1= mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($sql1);
  if($pass<>$row['password'])
  {
    echo "<script>alert(' Wrong password, Please try again and enter the correct password');window.location='edit_my_acount.php';</script>";exit;
  }
  $queryy = "UPDATE users set firstname = '{$firstname}',lastname = '{$lastname}', email = '{$email}', phone = '{$number}', password = '{$password}' where user_id = '{$id}'";  
  $res = mysqli_query($con,$queryy);
  if($res)
  {
    log_user_in($email, $password);

  } 
  else
  {
      echo "<script>alert(' There is an error while editing the store, please try again ');window.location='edit_my_acount.php';</script>";
  }
}
else 
{
    echo "<script>alert(' Error, Please fill the form again ');window.location='edit_my_acount.php';</script>";
}
?>