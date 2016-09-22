 
<?php 
	require_once'root.php';
	/**
	*  
	*/


	class Items extends Root
	{
		
		function __construct() 
		{
			# code...
		}
		function selectAccepted()
		{
			$query = "SELECT * FROM items order by post_id";
			return $this->runQuery($query);
		}

		function selectItems($id)
		{
			$query = "SELECT * FROM items where subcat_id = '{$id}' order by uploaded_date desc";
			return $this->runQuery($query);
		}
		function selectItem($id)
		{
			$query = "SELECT * FROM items where post_id = '{$id}' and is_accepted = 1";
			return $this->runQuery($query);
		}
		function selectRecomendedItems($sub_id,$id)
		{
			$query = "SELECT * FROM items where subcat_id = '{$sub_id}' and post_id !='{$id}' and is_accepted = 1 order by post_id desc limit 4";
			return $this->runQuery($query);
		}
		function selectItemSliader()
		{
			$query = "SELECT * FROM items where is_accepted = 1 order by post_id desc Limit 5";
			return $this->runQuery($query);
		}
		function selectItemCat($category)
		{
			$query = "SELECT * FROM items where refcat_id = '{$category}' and is_accepted = 1 order by post_id desc";
			return $this->runQuery($query);
		}
		function selectPostOfUser($id)
        {
        	$query = "SELECT * FROM items where user = '{$id}'";
        	return $this->runQuery($query);
        }
	}


 ?>
