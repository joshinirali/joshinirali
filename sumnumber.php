<?php
$num1= $_POST['num1'];
$num2= $_POST['num2'];

	if(isset($_POST['add']))
	{
		echo $num1 +  $num2;
	}	
	if(isset($_POST['min']))
	{
		echo $num1 -  $num2;
	}	
	if(isset($_POST['multi']))
	{
		echo $num1 *  $num2;
	}	
	if(isset($_POST['sub']))
	{
		if($num2 != 0)
		{
		
			echo $num1 /  $num2;
		}
		else
		{
			echo 'please enter other numer of 0';
		}
	}	
	
?>