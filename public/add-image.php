<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start(); 
$con = mysqli_connect("127.0.0.1","root","uIk3fDIL9q","eshopper");
require_once ('../includes/main_functions.php');
$type = $_POST['type']);
$id = $_SESSION['photo_id'];
$user = $_SESSION['id'];
unset($_SESSION['photo_id']);

    echo '$type';
    echo '$user';
    echo '$id';
	

?>  