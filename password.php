<?php
$username=$_POST['username'];
$password=$_POST['password'];
IF($username=='NIRALI'&& $password=='mypass' )
{
	echo 'LOGIN...!';
}
else{
	
	echo 'INVELID...!';
}
?>