 
<?php 
	require_once'root.php';
	/**
	* 
	*/


	class Subcategory extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function deleteSubCat($id)
		{
			$query= "DELETE FROM subcategories where subcat_id='{$id}'";
			return $this->runQuery($query);
		}

		function selectAllSubCat()
		{
			$query = "SELECT * FROM subcategories ";
			return $this->runQuery($query);
		}

		function selectSubCat($id)
		{
			$query = "SELECT * FROM subcategories where subcat_id='{$id}'";
			return $this->runQuery($query);
		}

		function insertsubCat($ref,$categoryname,$photo)
		{
			$query = "INSERT INTO subcategories (refcat_id,subcat_name,subcat_image) values ('{$ref}','{$categoryname}','{$photo}')";
			return $this->runQuery($query);
		}

		function updateSubCat($id,$ref,$categoryname,$photo)
		{
			$query = "UPDATE categories set refcat_id='{$ref}' subcat_name='{$categoryname}',subcat_image='{$photo}' where subcat_id ='{$id}'";			
			return $this->runQuery($query);
		}
		
	}


 ?>
