<?php

session_start();



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

if(isset($_POST['texteHaut']) && !empty($_POST['texteHaut']) || isset($_POST['texteBas']) && !empty($_POST['texteBas'])) {
	

	$post = $_POST['texteHaut']; //input text
	$color = $_POST['colorHaut'];	//input color, recupere #$$$$$$
	$colorRgb = hex2rgb($color); //converti coleur hexa en rgba
	$c1 = $colorRgb[0];
	$c2 = $colorRgb[1];
	$c3 = $colorRgb[2];

	$post1 = $_POST['texteBas']; //input text
	$color1 = $_POST['colorBas'];	//input color, recupere #$$$$$$
	$colorRgb1 = hex2rgb($color1); //converti coleur hexa en rgba
	$c11 = $colorRgb1[0];
	$c21 = $colorRgb1[1];
	$c31 = $colorRgb1[2];$image = imagecreatefromjpeg($_SESSION['image']);

$couleur1 = imagecolorallocate($image, $c11, $c21, $c31);
$couleur2 = imagecolorallocate($image, $c1, $c2, $c3);


//imagestring($image, 5, 50, 150, $post1, $couleur1);
imagettftext($image, 15, 10, 50, 50, $couleur2, 'ifti.ttf', $post);
imagettftext($image, 15, -10, 30, 150, $couleur1, 'ifti.ttf', $post1);

	
	ob_start();
		imagejpeg($image);
    $objet = ob_get_contents();
    ob_end_clean ();
	$enc = base64_encode($objet);
	echo($enc);





}


?>