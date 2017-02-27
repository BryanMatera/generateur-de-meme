<?php
session_start();
header ("Content-type: image/jpeg");
//----------------------------FONCTION CONVERTISSEUR HEXA EN RGBA----------------------
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



//--------------------------------------AJOUT TEXTE ET COULEUR DE TEXTE A LIMAGE-------------

if(isset($_POST['test']) && !empty($_POST['test']) && isset($_POST['test1']) && !empty($_POST['test1'])) {
	if(isset($_POST['submit'])) {

	$post = $_POST['test']; //input text
	$color = $_POST['color'];	//input color, recupere #$$$$$$
	$colorRgb = hex2rgb($color); //converti coleur hexa en rgba
	$c1 = $colorRgb[0];
	$c2 = $colorRgb[1];
	$c3 = $colorRgb[2];

	$post1 = $_POST['test1']; //input text
	$color1 = $_POST['color1'];	//input color, recupere #$$$$$$
	$colorRgb1 = hex2rgb($color1); //converti coleur hexa en rgba
	$c11 = $colorRgb1[0];
	$c21 = $colorRgb1[1];
	$c31 = $colorRgb1[2];

$image = imagecreatefromjpeg($_SESSION['image']);

$orange = imagecolorallocate($image, $c11, $c21, $c31);
$bleu = imagecolorallocate($image, $c1, $c2, $c3);


imagestring($image, 5, 50, 50, $post, $bleu);
imagestring($image, 5, 50, 150, $post1, $orange);
imagejpeg($image);


}
}




?>