<?php 
	function generateToken()
	{
		return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
	}

	function checkToken($token)
	{
		return $_SESSION['token'] == $token ? true:false;
	}

	function clearInput($input)
	{
		return mysqli_real_escape_string(self::$con,htmlentities($input));
	}

	function showError()
	{
		return mysqli_error(self::$con);	
	}

	// for function class

	function redirectTo($location = "index.php")
	{
		header('location:'.$location);exit;
	}

	function fetchRow($result)
	{
		return mysqli_fetch_assoc($result);
	}


	$this->fetchRow();

?>