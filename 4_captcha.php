<?php
header("content-type:image/jpeg");

$image = imagecreatetruecolor(400, 70);
$color = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255)); //choose Color
imagefilledrectangle($image, 0, 0, 400, 70, $color);  //Go to https://www.tutorialspoint.com/imagefilledrectangle-function-in-php



$text 			= GetRandomText(4);
$size 			= 30;
$angle 			= 0;
$colortext 		= imagecolorallocate($image, 0, 0, 0);
$fontfile  		= "fonts/Inkfree.ttf"; 

imagettftext($image, $size, $angle, 50, 50, $colortext, $fontfile, $text);


function GetRandomText($length) {

	$output = "";
	for($i=0; $i<$length; $i++) { //4
		
		$rand = rand(1,4); //1431
		if($rand == 1) {
			$text = chr(rand(67,90));
		}
		if($rand == 2) {
			$text = rand(0,9);
		}
		if($rand == 3) {
			$text = chr(rand(97,122));
		}
		if($rand == 4) {
			$text = rand(0,9);
		}

		$output .= $text; // D7VZ
	} 
	return $output;
}

session_start();
$_SESSION['captcha'] = $text;

imagejpeg($image);
?>

