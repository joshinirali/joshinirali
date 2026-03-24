<?php
	$indexarray=array(5,10,15,'amreli');
	//index array 
	
	$assoarray=array(80=>500,"name","my name");
	//assoarray
	
	$multidarray=array("address"=>array("FORM"=>"amreli",365610));
	//multidarray
	
echo '<pre>';
print_r($indexarray);
print_r($assoarray);	
print_r($multidarray);	

echo$multidarray['address']['FORM'];
?>


