<?php
 $to = "+250782767289@vtext.com";
 $from = "bavlaya549@gmail.com";
 $message = "done";
 $headers = "From: $from\n"; 
 mail($to, '', $message, $headers);
?>