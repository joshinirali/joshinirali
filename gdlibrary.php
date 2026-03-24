<?php
//CREAT A 200x50 IMAGE X AND Y
$image=imagecreate(200,50);
//SET BACKGROUND AND TEXT COLOR
$bg_color = imagecolorallocate($image,0,50,204);
$text_color=imagecolorallocate($image,255,255,255);
//while
//add text
imagestring($image,5,50,15,"JOSHI NIRALI",$text_color);
//output the image 
header("content-type:image/png");
imagepng($image);
imagedestroy($image);
?>