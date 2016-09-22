 
<?php  
	require_once'root.php';
	/**
	* 
	*/

	class Places extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deletePlace($id)
		{
			$query= "DELETE FROM places where place_id='{$id}'";
			return $this->runQuery($query);
		}

		function selectAllPlace()
		{
			$query = "SELECT * FROM places";
			return $this->runQuery($query);
		}

		function insertPlace($id,$country,$place)
		{
			$query = "INSERT INTO places (place_id,country,location) values ('{$id}','{$country}','{$place}')";
			return $this->runQuery($query);
		}

		function updatePlace($id,$country,$place)
		{
			$query = "UPDATE places set country='{$country}',location='{$place}' where place_id ='{$id}'";
			return $this->runQuery($query);
		}
	}



?>


