<?php 

	 $email = $POST['email'];
     $password = $POST['password'];
     //sql injection

     $email=stripcslashes($email);
     $password=stripcslashes($password);
     $email = mysql_real_escape_string($email);
     $password = mysql_real_escape_string($password);

     //connect to the server and select frmo database
     mysqli_connect("localhost","root","","global");

     //querry

     $result = mysqli_query("select * from admins where email_id ='$email' and password = '$password'") or die("failed to query database".mysql_error());
     $row = mysql_fetch_array($result);
     if($row['email_id'] == $email && $row['password'] == $password)
     {
         echo"welcome dear admin".$row['first_name'];
     }
     else
     {
     	echo "you are not smart enough";
     }




// ' or '1' = 1 -- 
?>
