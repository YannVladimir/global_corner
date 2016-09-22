<?php 
	require_once'root.php'; 
	class Userlogin extends Root
	{
		
		function __construct()
		{
			# code...
		}
		function checkUser($email,$password)
		{
			$query="SELECT * from users where email ='{$email}' and password = '{$password}'";
			return $this->runQuery($query);
		}
	}
		

 ?>