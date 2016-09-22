<?php 
	require_once'root.php'; 
	class User extends Root 
	{
		
		function __construct()
		{
			# code...
		} 

		function deleteUser($id)
		{
			$query= "DELETE FROM users where user_id='{$id}'";
			return $this->runQuery($query);
		}

		function selectUser()
		{
			$query = "SELECT user_id,firstname,lastname,email,phone FROM users ";
			return $this->runQuery($query);
		}

		function insertUser($firstname,$lastname,$email,$number,$password,$date)
		{
			$query = "INSERT INTO users (firstname,lastname,email,phone,password,joined) values ('{$firstname}','{$lastname}','{$email}','{$number}','{$password}','{$date}')";
			return $this->runQuery($query);
		}
		function selectSession($email,$password)
		{
			$query="SELECT * from users where email='{$email}' and password='{$password}'";
			return $this->runQuery($query);
		}

		function updateUser($id,$firstname,$lastname,$email,$numnber,$password)
		{
			$query = "UPDATE users set firstname='{$firstname}',lastname='{$lastname}',email='{$email}',phone='{$numnber}',password='{$password}' where user_id ='{$id}'";
			return $this->runQuery($query);
		}
		function selectAllUser()
		{
			$query="SELECT * from users";
			return $this->runQuery($query);
		}
		function updateAcceptedAll()
		{
			$query = "UPDATE users set accepted = 1 where accepted = 0";
			return $this->runQuery($query);
		}
		function updateAcceptedUser($id)
		{
			$query = "UPDATE users set accepted = 1 where user_id ='{$id}'";
			return $this->runQuery($query);
		}
		
	}
		

 ?>