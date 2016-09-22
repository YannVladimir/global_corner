<?php 

class Signup extends Controller{
	public function index() 
	{
		require_once BASEPATH.'app/models/categoriesfunction.php';
		require_once BASEPATH.'app/models/placefunction.php';
		$this->loadView('public/sign-up');
	}
	public function save()
	{
	    require_once BASEPATH.'app/models/userfunction.php';
	    $a = new User();
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$password = $_POST['pass'];
		$date = date("Y-m-d");
		$res = $a->insertUser($firstname,$lastname,$email,$number,$password,$date);
		if($res)
			{
                $_SESSION['user']="public";
				header("Location: ".BASEURL."home");exit;
			}
		else
			echo "Error";
		
	}
	
}