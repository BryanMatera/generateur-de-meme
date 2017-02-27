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
	<input type="submit" name="submit" value="Envoyer" />
</form>
<?php 
	require 'upoadFunc.php';
?>
<div id="recupAjax"></div>

<form method="post" id="formAjoutText" action="function.php"><!--formulaire dajout de texte a limage-->

	<input placeholder="Texte du haut" type="text" id="test" name="test">
	<input type="color" name="color"><br>

	<input placeholder="Texte du bas" type="text" id="test1" name="test1">
	<input type="color" name="color1"><br>


	<input type="submit" id="submit" name="submit" value="Memer">
</form>


</body>
</html>