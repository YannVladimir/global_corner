 
<?php 
	require_once'root.php';
	/**
	* 
	*/


	class Amacategory extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function selectAmaCat()
		{
			$query = "SELECT * FROM amacategories ";
			return $this->runQuery($query);
		}
	}


 ?>
