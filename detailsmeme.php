<?php
	require 'connexion.php';

	$id_meme = $_GET['id'];
	$auteur_meme = $_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meme | <?= $id_meme;?></title>
	<link rel="stylesheet" type="text/css" href="page_accueil.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<a class="logo" href="index.php">FQM<span id="spanLogo">Faites qu'on meme</span></a>
		<a class="creer" href="creationmemes.php">Je créé mon meme</a>
	</header>
	</br>
	<div class="presentation">
		<img class="imagedetail" src="images/memeFini/<?= $id_meme; ?>.png">
		<div class="rien">
			<h2><?= $id_meme; ?></h2>
			<p>Créer par: <?=  $auteur_meme; ?></p>
		</div>
	</div>
</body>
</html>