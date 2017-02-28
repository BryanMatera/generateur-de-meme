<?php 
	require 'connexion.php';

	$id_meme = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meme | <?= $id_meme;?></title>
	<link rel="stylesheet" type="text/css" href="page_accueil.css">
</head>
<body>
	<header>
		<div class="logo">Meme generator</div>
		<a class="créer" href="creationmemes.php">Je créé mon meme</a>
	</header>
	</br>
	<img src="images/memeDefaut/<?= $id_meme; ?>.jpg">
</body>
</html>