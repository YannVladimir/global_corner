<?php 

	/**
	* 
	*/
	class Logout extends Controller
	{
		
		function index()
		{
			unset($_SESSION['user_id']);
			unset($_SESSION['email']);
			unset($_SESSION['firstname']);
			unset($_SESSION['lastname']);
			unset($_SESSION['phone']);
			unset($_SESSION['password']);
			unset($_SESSION['user']);
			unset($_SESSION['is_admin']);
			unset($_SESSION['priority']);
	        session_destroy();
				
			header("Location: ".BASEURL."home");exit;
					
				
			
		}
	}



?>