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
									<!--texte du haut-->
									<input type="text" name="test" id="test" value="Texte du haut" >
									<input type="color" name="color" id="color"><!--sa couleur-->
	<label>Taille :</label>			<input type="number" name="tailleHaut" id="tailleHaut" value="20" min="1" max="30"><!--taille de police-->
	<label>Rotation :</label>		<input type="number" value="10" name="rotation" id="rotation" min="-100" max="100">
	<label>Distance gauche :</label><input type="number" value="50" name="left" id="left" min="0" max="150">
	<label>Distance haut :</label>	<input type="number" value="50" name="top" id="top" min="0" max="150"><br>

									<!--texte du bas-->
									<input type="text" name="test1" id="test1" value="Texte du bas"> 
									<input type="color" name="color1" id="color1"><!--couleur-->
	<label>Taille :					<input type="number" name="tailleBas" id="tailleBas" value="20"  min="1" max="30"><!--taille de police-->
	<label>Rotation :</label> 		<input type="number" name="rotation1" value="-10" id="rotation1" min="-100" max="100">
	<label>Distance gauche :</label><input type="number" name="left1" value="50" id="left1" min="0" max="150">
	<label>Distance haut :</label>	<input type="number" name="top1" value="150" id="top1" min="0" max="150"><br>


	<input type="submit" id="submit" name="submit" value="Gener un meme a partir de cette image">

</form> <!--fin de formulaire de modification dimage-->

<div id="recupAjax">
	<img id="image" width="300"/> <!--image affichée prete a etre modifié, appelée en ajax-->
</div>


<form> <!--formulaire d'enregistrement du meme terminé, appelé en ajax, c pour ca que le <form> na pas datribut-->
	<input type="text" id="auteur" name="auteur" placeholder="Meme fait par : ">
	<input type="text" id="nomMeme" name="nomMeme" placeholder="Nommez votre meme : ">
	<input type="submit" id="submit1" name="submit1" value="Enregistrer">
</form>


<script type="text/javascript" src="ajax.js"></script> 


</body>
</html>