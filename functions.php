<?php
require 'connection.php';
function checkuser($fuid,$ffname,$email){
    	$check = mysqli_query("select * from users_facebook where Fuid='$fuid'");
	$check = mysqli_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO users_facebook (Fuid,Ffname,Femail) VALUES ('$fuid','$ffname','$email')";
	mysqli_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE users_facebook SET Ffname='$ffname', Femail='$email' where Fuid='$fuid'";
	mysqli_query($query);
	}
}?>
