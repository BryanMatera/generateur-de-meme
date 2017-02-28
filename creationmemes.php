<!DOCTYPE html>
<html>
<head>
	<title>Je créé mon meme</title>
	<meta charser="utf-8">
	<link rel="stylesheet" type="text/css" href="styleCreation.css">
	<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
</head>
<body>

<h1>HELLO WORLD !!</h1>

<form method="post" action="" enctype="multipart/form-data"><!--Formulaire d'upload dimage-->
	<input type="file" name="image"/>
	<input type="submit" name="submit" value="Uploader" />
</form>
<?php 
	require 'upoadFunc.php'; //fichier conentant la fonction dupload dimages
?>



<form method="post" id="formAjoutText" action=""><!--formulaire dajout de texte a limage-->

	<input value="Texte du haut" type="text" id="test" name="test"><!--texte du haut-->
	<input type="color" name="color" id="color"><!--sa couleur-->
	Taille de police :<input type="number" value="20" name="tailleHaut" id="tailleHaut" min="1" max="30"><!--taille de police-->
	Rotation de phrase :<input type="number" value="10" name="rotation" id="rotation" min="-100" max="100">
	Distance côté gauche :<input type="number" value="50" name="left" id="left" min="0" max="150">
	Distance côté supérieur :<input type="number" value="50" name="top" id="top" min="0" max="150"><br>


	<input value="Texte du bas" type="text" id="test1" name="test1">
	<input type="color" name="color1" id="color1">
	Taille de police :<input type="number" value="20" name="tailleBas" id="tailleBas" min="1" max="30"><!--taille de police-->
	Rotation de phrase :<input type="number" value="-10" name="rotation1" id="rotation1" min="-100" max="100">
	Distance côté gauche :<input type="number" value="50" name="left1" id="left1" min="0" max="150">
	Distance côté supérieur :<input type="number" value="150" name="top1" id="top1" min="0" max="150"><br>


	<input type="submit" id="submit" name="submit" value="Preview">

</form>

<div id="recupAjax">
	<img id="image"/>
</div>


<form>
	<input type="text" id="auteur" name="auteur" placeholder="Meme fait par : ">
	<input type="text" id="nomMeme" name="nomMeme" placeholder="Nommez votre meme : ">
	<input type="submit" id="submit1" name="submit1" value="Enregistrer">
</form>


<script type="text/javascript" src="ajax.js"></script>


</body>
</html>