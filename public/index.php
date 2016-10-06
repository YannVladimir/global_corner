<?php 
	require_once('../global_corner/main_functions.php');
	$url="home.php" ;
	$pageName = "home";
	if(isset($_GET['pageName']) && !empty($_GET['pageName']) && is_string($_GET['pageName']))
	{
		$pageName = $_GET['pageName'];
		$url = $pageName.".php";
		if(!file_exists($url))
		{
			$url ="home.php";
		}
	}
 ?>
 <?php
 include($url);
 ?>
 	