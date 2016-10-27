<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(E_ALL);
 $to = "250782767289@vtext.com";
 $from = "bavlaya549@gmail.com";
 $message = "done";
 $headers = "From: $from\n"; 
 mail($to, '', $message, $headers);
?>