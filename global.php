<?php
$global='i am global';
$varint=500;
function sum(){
	$va=50;
	global $global;
	global $varint;
	echo $global;
	echo $varint;
	echo $GLOBALS["varint"];
	echo $GLOBALS["global"];
}
echo $global;
?>
	
	
	
	