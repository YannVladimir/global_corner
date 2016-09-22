
<?php 
	require_once'root.php';
	/**
	*   
	*/
	class Contacts extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deleteMessages($id)
		{
			$query= "DELETE FROM contactus where id='{$id}'";
			return $this->runQuery($query);
		}

		function selectMessages($id)
		{
			$query = "SELECT * FROM contactus where id='{$id}'";
			return $this->runQuery($query);
		}

		function insertMessages($user_id,$username,$email,$contacts,$subject,$contents,$mdate)
		{
			$query = "INSERT INTO contactus (user_id,name,email,phone,subject,message,received_date) values ('{$user_id}','{$username}','{$email}','{$contacts}','{$subject}','{$contents}','{$mdate}')";
			return $this->runQuery($query);
		}
		function selectAllMessages()
		{
			$query = "SELECT * FROM contactus ";
			return $this->runQuery($query);

		}
		function updateSeenMessages($id)
		{
			$query = "UPDATE contactus set seen = 1 where id ='{$id}'";
			return $this->runQuery($query);
		}
	}

 ?>
