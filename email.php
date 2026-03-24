<?php
$email="test@gmailexample.com";
if (preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,6}$/",$email))
	{
		echo "valid email";
	}
	else{
			echo "invalid email";
	}	
	?>