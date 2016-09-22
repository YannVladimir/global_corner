<?php 
	session_start();	
	require_once('../path.php');
	require_once('../app/init.php');
	$app = new App;
	$controller = $app->get_controller();
	$method = $app->get_method();
	require_once BASEPATH.'app/controllers/'.$controller.".php";
	$cont = new $controller();
	$cont->$method(); 
?>