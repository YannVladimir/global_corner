 
<?php 
	require_once'root.php';
	/**
	* 
	*/


	class Maincategory extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deleteCat($id)
		{
			$query= "DELETE FROM categories where cat_id='{$id}'";
			return $this->runQuery($query);
		}

		function selectAllCat()
		{
			$query = "SELECT * FROM categories ";
			return $this->runQuery($query);
		}

		function selectCat($id)
		{
			$query = "SELECT * FROM categories where id='{$id}'";
			return $this->runQuery($query);
		}

		function insertCat($categoryname,$photo)
		{
			$query = "INSERT INTO categories (cat_name,cat_image) values ('{$categoryname}','{$photo}')";
			return $this->runQuery($query);
		}

		function updateCat($id,$categoryname,$photo)
		{
			$query = "UPDATE categories set cat_name='{$categoryname}',cat_image='{$photo}' where cat_id ='{$id}'";			return $this->runQuery($query);
		    return $this->runQuery($query);
		}
		
	}


 ?>
