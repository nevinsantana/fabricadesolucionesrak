<?php
	header("Content-type: image/jpeg");
	
	$img_jpg = imagecreate(700,600);
	$background_color = imagecolorallocate($img_jpg, 255, 114, 29);

	imagefill($img_jpg, 0, 0, $background_color);
	imagejpeg($img_jpg);
?>