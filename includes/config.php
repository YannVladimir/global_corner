<?php
defined("SERVER")? NULL:define("SERVER","104.131.171.3");
defined("USER")?NULL: define("USER","root");
defined("PASSWORD")?NULL: define("PASSWORD","uIk3fDIL9q");
defined("DATABASE")?NULL: define("DATABASE","eshopper");
session_start();
$con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE);
?>