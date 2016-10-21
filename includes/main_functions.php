
	<?php 
    function checkToken()
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            if (!isset($_POST['_token']) || ($_POST['_token'] != $_SESSION['_token'])){
                die('You re not smart enough bro, Invalid CSRF token');
            }
        }
        $_SESSIOn['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }
	function redirectTo($loc)
	{
		header('location:'.$loc);exit;
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
        return mysqli_real_escape_string(mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper"),htmlentities($input));
    }
    function log_user_in($email, $password)
    {
        $con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
        $email = clearInput($email);
        $password = clearInput($password);
        $query="SELECT * from users where email ='{$email}' and password = '{$password}'";
        $res = mysqli_query($con,$query);
        if(mysqli_num_rows($res) >0)
        {
        	$row = mysqli_fetch_assoc($res);
        	$_SESSION['id'] = $row['user_id'];
            $_SESSION['username'] = $row['firstname'].' '.$row['lastname'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['phone']=$row['phone'];
            $_SESSION['email']=$email;
            $_SESSION['priority']=$row['priority'];
            if($row['is_admin']  == 1)
	        {
                $_SESSION['admin'] = "01";
	        	header("location: ../admin/dashboard.php");
	        }
	        else
	        {
                $_SESSION['admin'] == "00";
	        	header("location: home.php");
	        }exit();
	         
        }
        else
        {
        	$_SESSION['message'] = "Wrong email/password combination";
        	header("location: login.php");
        }exit();    	
    }

    function log_user_out()
    {
    	session_destroy();
    	unset($_SESSION['id']);
    	unset($_SESSION['username']);
    	unset($_SESSION['phone']);
    	unset($_SESSION['email']);
    	unset($_SESSION['priority']);
    }

    function log_user_out_admin()
    {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['phone']);
        unset($_SESSION['email']);
        unset($_SESSION['priority']);
        header("location: ../home.php");exit;
    }

    function checkAdmin()
    {
        if (isset($_SESSION['admin']) =="01")
        {
           return true;
        }
        else
            header("location: ../home.php");
            exit;
    }
    
?>