<?php 
    $con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
	// for redirecting 
	function redirectTo($loc)
	{
		header('location:'.$loc);
		exit;
	}

	function encodeUrl($url='')
	{
		if(!empty($url)) return encodeUrl($url);
		return false;
	}

	function checkIsStringSetPost($name)
	{
		if(isset($_POST[$name]) && !empty($_POST[$name]) && is_string($_POST[$name]))
			return true;
		else return false;
	}
	function checkIsIntSetPost($name)
	{
		if(isset($_POST[$name]) && !empty($_POST[$name]) && is_numeric($_POST[$name]))
			return true;
		else return false;
	}
	function clearInput($input)
    {
        return mysqli_real_escape_string("127.0.0.1","root","uIk3fDIL9q","eshopper"),htmlentities($input));
    }
?>