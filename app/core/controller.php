<?php 


class Controller
{
	protected $res;
	public function loadView($view)
	{
		require_once BASEPATH.'app/views/'.$view.".php";
	}
	public function getLastResult()
	{
		return $this->res;
	}
	public function generateToken()
	{
		return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
	}

	public function checkToken($token)
	{
		return $_SESSION['token'] == $token ? true:false;
	}

	public function clearInput($input)
	{
		return mysqli_real_escape_string(self::$con,htmlentities($input));
	}

	public function showError()
	{
		return mysqli_error(self::$con);	
	}

	// for function class

	public function redirectTo($location = "index.php")
	{
		header('location:'.$location);exit;
	}

	public function fetchRow($result)
	{
		return mysqli_fetch_assoc($result);
	}
}