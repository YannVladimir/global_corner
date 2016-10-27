<?php
  require('class-Clorkwork.php');
  $apikey = "b323f6b70ca11f37241ae41ae9f9dc9f162a5ad3";
  $clorkwork = new Clorkwork($apikey);
  $message = array('to' => '+250782767289', 'message' => 'done yann from 250trade.com');
  $done = $clorkwork->send($message);
?>