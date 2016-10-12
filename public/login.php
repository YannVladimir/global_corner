<?php 
//$password = sha1($_POST['password']);
// $password = md5($_POST['password']);
require_once('../includes/main_functions.php');
if(checkIsStringSetPost('email'))
{
 $email = clearInput($_POST['email']);
 $password = clearInput($_POST['password']);
 $query="SELECT * from users where email ='{$email}' and password = '{$password}'";
 $res = mysqli_query($con,$query);
 $count = mysqli_num_rows($res);
 if($count > 0)
 {
	$row = mysqli_fetch_assoc($res);
	$_SESSION['id'] = $row['user_id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname']=$row['lastname'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    $_SESSION['priority']=$row['priority'];
    $_SESSION['is_admin']=$row['is_admin'];
	//$_SESSION['user_is_admin']=$row['is_admin'];
	if($row['is_admin']  == 1)
	{
		$_SESSION['user']="admin";
		$loc = admin/dashboard.php;
		header('Location:'.$loc);exit;
		//echo "1";
	}
	else
	{
		$_SESSION['user']="public";
		$loc = home.php;
		header('Location:'.$loc);exit;
		//echo "2";
	}
  }
  else
  {
    echo "<script>alert(' email and password does not match, please try again');window.location='home.php';</script>";exit;
  }
}
else
{
	echo "<script>alert('Please enter email and password to login to your acount');window.location='loginpaage.php';</script>";exit;
}
?>		