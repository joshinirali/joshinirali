<?php
$data=array("user"=>array("name"=>"nirali","age"=>"18",array("num"=>4)));
echo json_encode($data,true);
//array to string
$string=json_encode($data,true);
$data=json_decode($string,true);
//string to array
echo '<pre>';
print_r($data);
?>