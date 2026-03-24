<?php
$host='localhost';
$user="root";
$password="";
$database="sem2";
if(mysqli_connect($host,$user,$password,$database))
{
		echo 'connect';
}
else
{
		echo 'not connect';
}
?>