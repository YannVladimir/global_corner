<?php 

class Message extends Controller{
	public function index()
	{
		header("Location: ".BASEURL."contact_us");exit;
	}
	public function create()
	{
		require_once BASEPATH.'app/models/messagesfunction.php';
		$contact = new Contacts();
		function clearInput($input)
	    {
         return mysqli_real_escape_string(mysqli_connect("localhost","root","","eshopper"),htmlentities($input));
	    }
		if($_SESSION)
		{
			$username = $_SESSION['firstname'].' '.$_SESSION['lastname'];
			$email = $_SESSION['email'];
			$contacts =$_SESSION['phone'];
			$subject = clearInput($_POST['subject']);
			$contents = clearInput($_POST['message']);
			$user_id = $_SESSION['id'];
			$mdate= date("Y-m-d");
			$res = $contact->insertMessages($user_id,$username,$email,$contacts,$subject,$contents,$mdate);
		    
		}
		else
		{  
			$username = clearInput($_POST['name']);
		    $email = clearInput($_POST['email']);
		    $contacts = clearInput($_POST['number']);
		    $contents = clearInput($_POST['message']);
		    $subject = clearInput($_POST['subject']);
		    $user_id = 0;
		    $mdate= date("Y-m-d");
		}
		$res = $contact->insertMessages($user_id,$username,$email,$contacts,$subject,$contents,$mdate);
		if($res)
			{
				
                echo "<script>alert(' Thank you for contacting us ');window.location='index';</script>";
			}
		else
		{
			echo "<script>alert(' An error has occured while contacting us, Please try again');window.location='index';</script>";
        }
	}
}