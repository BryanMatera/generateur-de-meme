<?php 
	require 'connexion.php';
	$DB = new DB();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page Accueil</title>
	<link rel="stylesheet" type="text/css" href="page_accueil.css">
</head>
<body>
	<header>
		<div class="logo">Meme generator</div>
		<a class="créer" href="creationmemes.php">Je créé mon meme</a>
	</header>
	</br>
	<div class="memepresentation">
		<?php 
		$memes = $DB->query('SELECT * FROM memedefaut');
		$url = "http://localhost/13_meme_generator/detailsmeme.php?id=";
		foreach ($memes as $meme) : ?>
			<div class="meme">
			<a href="detailsmeme.php?id=<?= $meme->nom; ?>"><img class="memedefaut" src="images/memeDefaut/<?= $meme->nom; ?>.jpg"/></a>
			<p><?= $meme->nom; ?></p>
			<p>Créé par : <?= $meme->auteur; ?></p>
			<a href="https://twitter.com/share?url=<?= $url; ?><?= $meme->nom; ?>">twitter</a>
			
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>

