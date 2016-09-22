<?php 

class Newuser extends Controller{
	public function home() 
	{
		$this->loadView('public/globalhome');
	}
	public function loginpage() 
	{
		header("Location: ".BASEURL."loginpage");exit;
	}
	public function create()
	{
		function clearInput($input)
	    {
		    return mysqli_real_escape_string(mysqli_connect("localhost","root","","lost"),htmlentities($input));
	    }
	    require_once BASEPATH.'app/models/userfunction.php';
		$user = new User();
		$firstname = clearInput($_POST['firstname']);
		$lastname = clearInput($_POST['lastname']);
		$email = clearInput($_POST['email']);
		$number = clearInput($_POST['phone']);
		$password = clearInput($_POST['password']);
		if($_POST['password']!= $_POST['repassword'])
		{
			echo "<script>alert('the entered password and re type password must be same, please try again');window.location='loginpage';</script>";exit;
		}
		$check = $user->selectAllUser();
		while($row = mysqli_fetch_assoc($check))
		{
			if($email==$row['email'])
			{
                echo "<script>alert(' The entered email arleady has an account, please try again with different email or login with your previous account');window.location='loginpage';</script>";exit;
			}
		}
		$date = date("Y-m-d");
		$res = $user->insertUser($firstname,$lastname,$email,$number,$password,$date);
		if($res)
		{
			$res2 = $user->selectSession($email,$password);
			$row = mysqli_fetch_assoc($res2);
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname']=$row['lastname'];
			$_SESSION['phone']=$row['phone'];
			$_SESSION['email']=$row['email'];
			$_SESSION['password']=$row['password'];
			$_SESSION['priority']=$row['priority'];
			$_SESSION['is_admin']=$row['is_admin'];
			echo "<script>alert(' Account created successfully, most welcome ');window.location='home';</script>";
		} 
		else
		{
		    echo "<script>alert(' There is an error while creating the account, please try again ');window.location='loginpage';</script>";
		}
	}
	    
	
}