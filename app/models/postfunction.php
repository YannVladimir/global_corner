
<?php 
	require_once'root.php';
	/**
	*  
	*/
 
 
class Post extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deletePost($id)
		{
			$query= "DELETE FROM posts where post_id='{$id}'";
			return $this->runQuery($query);
		}

        function accept($id)
        {
        	$query= "UPDATE posts set is_accepted = 1 where post_id='{$id}'";
        	return $this->runQuery($query);
        }
		function insertPost($category,$user,$seller,$nam,$price,$details,$place,$contacts,$uploaded,$refphoto)
		{
			$query = "INSERT INTO posts (category,user,seller,name,price,details,place,contacts,uploaded_date,photo) values ('{$category}','{$user}','{$seller}','{$nam}','{$price}','{$details}','{$place}','{$contacts}','{$uploaded}','{$refphoto}')";
			return $this->runQuery($query);
		}
		function selectPost()
        {
        	$query = "SELECT * FROM posts";
        	return $this->runQuery($query);
        }
        function selectPostOfUser($id)
        {
        	$query = "SELECT * FROM posts where user = '{$id}'";
        	return $this->runQuery($query);
        }
		
	}

 ?>
