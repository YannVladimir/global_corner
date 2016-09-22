
<?php 
	require_once'root.php';
	/**
	* 
	*/

class Photos extends Root
	{
		
		function __construct()
		{
			# code...
		}

		

		function selectPhoto()
		{
			$query = "SELECT * FROM post_photos ";
			return $this->runQuery($query);
		}

		function insertPhoto($photo,$img1,$img2,$img3,$img4,$img5,$img6,$img7)
		{
			$query = "INSERT INTO post_photos (main,photo1,photo2,photo3,photo4,photo5,photo6,photo7) values ('{$photo}','{$img1}','{$img2}','{$img3}','{$img4}','{$img5}','{$img6}','{$img7}')";
			return $this->runQuery($query);
		}

		
	}

 ?>
