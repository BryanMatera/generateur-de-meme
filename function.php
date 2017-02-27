<?php
header ("Content-type: image/jpeg");

function hex2rgb($hex) {
	$hex = str_replace("#", "", $hex);

	if(strlen($hex) == 3) {
		$r = hexdec(substr($hex,0,1).substr($hex,0,1));
		$g = hexdec(substr($hex,1,1).substr($hex,1,1));
		$b = hexdec(substr($hex,2,1).substr($hex,2,1));
	} else {
		$r = hexdec(substr($hex,0,2));
		$g = hexdec(substr($hex,2,2));
		$b = hexdec(substr($hex,4,2));
	}
$rgb = array($r, $g, $b);

return $rgb; // returns an array with the rgb values
}





if(isset($_POST['test']) and !empty($_POST['test'])) {
	if(isset($_POST['submit'])) {

	$post = $_POST['test']; //input text
	$color = $_POST['color'];	//input color, recupere #$$$$$$
	$colorRgb = hex2rgb($color); //converti coleur hexa en rgba
	$c1 = $colorRgb[0];
	$c2 = $colorRgb[1];
	$c3 = $colorRgb[2];


$image = imagecreatefromjpeg("images/imagesDefaut/defaut1.jpg");

$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, $c1, $c2, $c3);


imagestring($image, 5, 50, 50, $post, $bleu);

imagepng($image);


}
}
?>