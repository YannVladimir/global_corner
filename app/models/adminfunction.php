
<?php 
	require_once'root.php';
	/**
	* 
	*/
	class Admin extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deleteAdmin($id)
		{
			$query= "DELETE FROM admins where admin_id='{$id}'";
			return $this->runQuery($query);
		}

		function selectAdmin($id)
		{
			$query = "SELECT admin_id,priority,first_name,last_name,email_id,phone_number FROM admins where admin_id='{$id}'";
			return $this->runQuery($query);
		}

		function insertAdmin($firstname,$lastname,$email,$number,$password)
		{
			$query = "INSERT INTO users (firstname,lastname,email,phone,password,is_admin) values ('{$firstname}','{$lastname}','{$email}','{$number}','{$password}','1')";
			return $this->runQuery($query);
		}

		function updateAdmin($id,$priority,$firstname,$lastname,$email,$numnber,$password)
		{
			$query = "UPDATE admins set priority='{$priority}',first_name='{$firstname}',last_name='{$lastname}',email_id='{$email}',phone_number='{$numnber}',password='{$password}' where admin_id ='{$id}'";
			return $this->runQuery($query);
		}
		function selectAllAdmin()
		{
			$query = "SELECT * from users where is_admin='1'";
			return $this->runQuery($query);
		}
	}


	
 ?>
