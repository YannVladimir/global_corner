<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
  require('class-Clockwork.php');
  $apikey = "b323f6b70ca11f37241ae41ae9f9dc9f162a5ad3";
  $clockwork = new Clockwork($apikey);
  $message = array('to' => '250782767289', 'message' => 'done yann from 250trade.com');
  $done = $clockwork->send($message);
?>