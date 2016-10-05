<?php 

class Loginpage extends Controller{
	public function index()
	{
		$this->loadView('public/login');
	}
	public function authenticateUser()
		{

			//$password = sha1($_POST['password']);
			// $password = md5($_POST['password']);
			function clearInput($input)
	        {
		        return mysqli_real_escape_string(mysqli_connect("104.131.171.3","root","uIk3fDIL9q","eshopper"),htmlentities($input));
	        }

			require_once BASEPATH.'app/models/loginfunction.php';
			$query= new Userlogin();
			$email = clearInput($_POST['email']);
			$password = clearInput($_POST['password']);
			$res = $query->checkUser($email,$password);
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
					header("Location: ".BASEURL."dashboard");exit;
					//echo "1";
				}else
				{
					$_SESSION['user']="public";
					header("Location: ".BASEURL."home");exit;
					//echo "2";
				}
			}
			else
			{
			echo "<script>alert(' email and password does not match, please try again');window.location='index';</script>";exit;
			}
		}
}