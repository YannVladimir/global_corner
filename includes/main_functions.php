 
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
                if(isset($_SESSION['page']))
                {
                   if($_SESSION['page'] == 'my_order')
                   {
                    $ids = $_GET['id'];
                    unset($_SESSION['page']);
                    header("location: my_order.php?id=$ids");
                   }
                   elseif ($_SESSION['page'] == 'notifications') 
                   {
                    unset($_SESSION['page']);
                    header("location: notifications.php");
                   }
                   elseif ($_SESSION['page'] == 'edit_my_acount') 
                   {
                    unset($_SESSION['page']);
                    header("location: edit_my_acount.php");
                   }
                   elseif ($_SESSION['page'] == 'my_acount') 
                   {
                    unset($_SESSION['page']);
                    header("location: my_acount.php");
                   }

                   elseif ($_SESSION['page'] == 'my_post') 
                   {
                    $ids = $_GET['id'];
                    unset($_SESSION['page']);
                    header("location: my_post.php?id=$ids");
                   }
                   elseif ($_SESSION['page'] == 'my_service') 
                   {
                    $ids = $_GET['id'];
                    unset($_SESSION['page']);
                    header("location: my_service.php?id=$ids");
                   }
                }
                else
                {
                   header("location: home.php");    
                }
                
	        	
	        }exit();
	         
        }
        else
        {
        	$_SESSION['message'] = "Wrong email/password combination";
        	header("location: login.php");
        }exit();    	
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
                header("location: upload.php?id=7");    
            }exit();
             
        }
        else
        {
            $_SESSION['message'] = "Wrong email/password combination";
            header("location: login.php");
        }exit();        
    }
    /*function service_log_user_in($email, $password)
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
            $category = $_SESSION['category'];
            $seller = $_SESSION['seller'];
            $nam = $_SESSION['nam'];
            $email = $_SESSION['emails'];
            $details = $_SESSION['details'];
            $place = $_SESSION['place'];
            $location = $_SESSION['location'];
            $phone = $_SESSION['phones'];
            
            $uploaded = date("Y-m-d");
            unset($_SESSION['phones']);
            unset($_SESSION['category']);
            unset($_SESSION['details']);
            unset($_SESSION['location']);
            unset($_SESSION['place']);
            unset($_SESSION['emails']);
            unset($_SESSION['nam']);
            unset($_SESSION['seller']);
            unset($_SESSION['category']);
            
            $_SESSION['message']= "Please login to your acount to make this order, or create your new acount";
            $user = $_SESSION['id'];
            $querry = "INSERT INTO services (title,reserved,sub_category,phone,contacts,user,location,akarere,details,uploaded_date,main,photo1,photo2,photo3,photo4,photo5) values ('{$nam}','{$seller}','{$category}','{$phone}','{$email}','{$user}','{$place}','{$location}','{$details}','{$uploaded}','{$photo}','{$img1}','{$img2}','{$img3}','{$img4}','{$img5}')";
            $r = mysqli_query($con,$querry);
            if($r)
            {
               $q = "UPDATE users set sell_service ='{$category}' where user_id ='{$user}'";
               $re = mysqli_query($con,$q);
               $query = "SELECT * from amaservice where title = '{$nam}' and reserved = '{$seller}' and details = '{$details}' and user = '{$user}' ";
               $b = mysqli_query($con,$query);
               $c = mysqli_fetch_assoc($b);
               $id = $c['id'];
               echo "<script>alert(' Your ad has been uploaded successfully');window.location='my_service.php?id=$id';</script>";exit;
            }
            else
            {
               echo "<script>alert(' Failed to post your ad, please try again');window.location='upload.php';</script>";exit;
            }
        }
        else
        {
            $_SESSION['message'] = "Wrong email/password combination";
            header("location: order-login.php");
        }exit();        
    } ibi ni ibyambere umuntu abanza gutanga details za service mbere yuko agiramo acount.*/
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
            $type = $_SESSION['type'];
            unset($_SESSION['type']);
            unset($_SESSION['title']);
            unset($_SESSION['category']);
            unset($_SESSION['details']);
            unset($_SESSION['location']);
            unset($_SESSION['date']);
            $_SESSION['message']= "Please login to your acount to make this order, or create your new acount";
            $user = $_SESSION['id'];
            if ($type =='service')
            {
               $is_product = 0;
               $q = "UPDATE users set buy_service ='{$category}' where user_id ='{$user}'";
               $r = mysqli_query($con,$q);
            }
            else
            {
               $is_product = 1;
               $q = "UPDATE users set buy_product ='{$category}' where user_id ='{$user}'";
               $r = mysqli_query($con,$q);
            }
            $sql = "INSERT INTO orders (name,category,details,user,place,up_date,is_product) values ('{$izina}','{$category}','{$details}','{$user}','{$location}','{$date}','{$is_product}')";
            $r = mysqli_query($con,$sql);
            if($r)
            {
               $query = "SELECT * from orders where name = '{$izina}' and details = '{$details}' and user = '{$user}' ";
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