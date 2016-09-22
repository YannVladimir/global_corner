
<?php 
	require_once'root.php';
	/**
	* 
	*/


class Ads extends Root
	{
		
		function __construct()
		{
			# code...
		}

		function selectAds($id)
		{
			$query = "SELECT * FROM ads where post_id='{$id}'";
			return $this->runQuery($query);
		}
        
        function selectAllAds()
		{
			$query = "SELECT * FROM ads ";
			return $this->runQuery($query);
		}
		function selectTopAds()
		{
			$query = "SELECT * FROM ads Limit 8";
			return $this->runQuery($query);
		}
		function selectTopelectronicsAds()
		{
			$query = "SELECT * FROM ads where category_name= 'electronics' Limit 8 ";
			return $this->runQuery($query);
		}
		function selectTopcarsAds()
		{
			$query = "SELECT * FROM ads where category_name= 'cars and bikes' Limit 8 ";
			return $this->runQuery($query);
		}
		function selectTopbookAds()
		{
			$query = "SELECT * FROM ads where category_name= 'books' Limit 8 ";
			return $this->runQuery($query);
		}
		function selectTopfurnituresAds()
		{
			$query = "SELECT * FROM ads where category_name= 'furnitures' Limit 8 ";
			return $this->runQuery($query);
		}
	}

 ?>
