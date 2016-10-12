<?php 
require_once('../includes/main_functions.php');
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
                echo "<script>alert(' The entered email arleady has an account, please try again with different email or try to login with your previous account');window.location='loginpage.php';</script>";exit;
  	}
  }
  $date = date("Y-m-d");
  $queryy = "INSERT INTO users (firstname,lastname,email,phone,password,joined) values ('{$firstname}','{$lastname}','{$email}','{$number}','{$password}','{$date}')";
  $res = mysqli_query($con,$queryy);
  if($res)
  {
  	$queryyy = "SELECT * from users where email='{$email}' and password='{$password}'";
	$res2 = mysqli_query($con,$queryyy);
  	$row = mysqli_fetch_assoc($res2);
  	$_SESSION['id'] = $row['user_id'];
  	$_SESSION['firstname'] = $row['firstname'];
  	$_SESSION['lastname']=$row['lastname'];
  	$_SESSION['phone']=$row['phone'];
  	$_SESSION['email']=$row['email'];
  	$_SESSION['password']=$row['password'];
  	$_SESSION['priority']=$row['priority'];
  	$_SESSION['is_admin']=$row['is_admin'];
  	echo "<script>alert(' Account created successfully, most welcome ');window.location='home.php';</script>";
  } 
  else
  {
      echo "<script>alert(' There is an error while creating the account, please try again ');window.location='loginpage.php';</script>";
  }
}
else 
{
    echo "<script>alert(' Error, Please fill the form again ');window.location='loginpage.php';</script>";
}
?>