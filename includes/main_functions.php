
	<?php
    function generateUser()
    {
        $_SESSION['u'] = '0';
    }    
    function checkAdmin()
    {
        $_SESSION['is_user'] = '0';
    }
    function checkUser()
    {
        $_SESSION['is_user'] = '1';
        
    } 
    function checkToken()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){
                die('You re not smart enough bro, Invalid CSRF token');
            }
        }
        $_SESSION['_token'] = bin2hex(openssl_random_pseudo_bytes(16));
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
                $_SESSION['u'] = '1';
	        	header("location: ../admin/dashboard.php");
	        }
	        else
	        {
                $_SESSION['u'] = '0';
	        	header("location: home.php");
	        }exit();
	         
        }
        else
        {
        	$_SESSION['message'] = "Wrong email/password combination";
        	header("location: login.php");
        }exit();    	
    }
    function order_log_user_in($email, $password)
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
            $_SESSION['u'] = '0';
            $izina = $_SESSION['title'];
            $category = $_SESSION['category'];
            $details = $_SESSION['details'];
            $location = $_SESSION['location'];
            $date = $_SESSION['date'];
            unset($_SESSION['title']);
            unset($_SESSION['category']);
            unset($_SESSION['details']);
            unset($_SESSION['location']);
            unset($_SESSION['date']);
            $_SESSION['message']= "Please login to your acount to make this order, or create your new acount";
            $user = $_SESSION['id'];
            $sql = "INSERT INTO orders (name,category,details,user,place,up_date) values ('{$izina}','{$category}','{$details}','{$user}','{$location}','{$date}')";
            $r = mysqli_query($con,$sql);
            if($r)
            {
               $query = "SELECT * from orders where tittle = '{$izina}' and details = '{$details}' and user = '{$user}' ";
               $b = mysqli_query($con,$query);
               $c = mysqli_fetch_assoc($b);
               $id = $c['id'];
               echo "<script>alert(' Your order has been uploaded successfully');window.location='my_order.php?id=$id';</script>";exit;
            }
            else
            {
               echo "<script>alert(' Failed to post your order, please try again');window.location='order.php';</script>";exit;
            }
        }
        else
        {
            $_SESSION['message'] = "Wrong email/password combination";
            header("location: order-login.php");
        }exit();        
    }
    function answer_log_user_in($email, $password)
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
            $_SESSION['u'] = '0';
            $user = $_SESSION['id'];
            echo "<script>alert(' Done, click ok to proceed');window.location='contact-dealer.php';</script>";exit;
        }
        else
        {
            $_SESSION['message'] = "Wrong email/password combination";
            header("location: answer-login.php");
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

  
    
?>