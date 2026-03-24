<?php
$host='localhost';
$user="root";
$password="";
$database="test";
if(mysqli_connect($host,$user,$password,$database)){
$con=mysqli_connect()}else{
	echo 'not connect';
}
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="insert into" user('name','email','password')
value('name','email','password')
mysqli_query($con,$sql)

?>