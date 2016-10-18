<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
if(checkIsStringSetPost('firstname') && checkIsStringSetPost('email'))
{
  $firstname = clearInput($_POST['firstname']);
  $lastname = clearInput($_POST['lastname']);
  $email = clearInput($_POST['email']);
  $number = clearInput($_POST['phone']);
  $password = clearInput($_POST['password']);
  if($_POST['password']!= $_POST['repassword'])
  {
  	echo "<script>alert('the entered password and re type password must be match, please try again');window.location='loginpage.php';</script>";exit;
  }
  $query="SELECT * from users";
  $check = mysqli_query($con,$query);
  while($row = mysqli_fetch_assoc($check))
  {
  	if($email==$row['email'])
  	{
                echo "<script>alert(' The entered email arleady has an account, please try again with different email or try to login with your previous account');window.location='login.php';</script>";exit;
  	}
  }
  $date = date("Y-m-d");
  $queryy = "INSERT INTO users (firstname,lastname,email,phone,password,joined) values ('{$firstname}','{$lastname}','{$email}','{$number}','{$password}','{$date}')";
  $res = mysqli_query($con,$queryy);
  if($res)
  {
        $queryo="SELECT * from users where email ='{$email}' and password = '{$password}'}";
        $reso = mysqli_query($con,$queryo);
        if(mysqli_num_rows($reso) >0)
        {
          $row = mysqli_fetch_assoc($res);
          $_SESSION['id'] = $row['user_id'];
            $_SESSION['username'] = $row['firstname'].' '.$row['lastname'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['email']=$email;
            $_SESSION['priority']=$row['priority'];
            if($row['is_admin']  == 1)
          {
                $_SESSION['admin'] = "01";
            header("location: ../admin/dashboard.php");
          }
          else
          {
                $_SESSION['admin'] == "00";
            header("location: home.php");
          }exit();
           
        }
        else
        {
          $_SESSION['message'] = "Wrong email/password combination";
          header("location: login.php");
        }exit();      
    }

  } 
  else
  {
      echo "<script>alert(' There is an error while creating the account, please try again ');window.location='login.php';</script>";
  }
}
else 
{
    echo "<script>alert(' Error, Please fill the form again ');window.location='login.php';</script>";
}
?>