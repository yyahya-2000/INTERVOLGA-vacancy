<?php

function compresse_img($file)
{
	$src_img = ImageCreateFromJpeg($file);
	list($src_width, $src_height) = GetImageSize($file);

	$required_width = 200;
	$required_height = 100;

	$compressed_img = ImageCreateTrueColor($required_width, $required_height);
	ImageCopyResampled($compressed_img, $src_img, 0, 0, 0, 0, $required_width, $required_height, $src_width, $src_height);
	header('Content-Type: image/jpeg'); 
	imagejpeg($compressed_img, "compressed_img.jpg"); 
	imagejpeg($compressed_img); 
	ImageDestroy($compressed_img);
}
compresse_img("image.png");
?>