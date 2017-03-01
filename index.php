<?php 
	require 'connexion.php';
	$DB = new DB();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page Accueil</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="page_accueil.css">

</head>
<body>
	<header>
		<p class="logo">FQM<span id="spanLogo">Faut qu'on meme</span></p>
		<a class="creer" href="index.php">Voir les autres memes</a>
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
			<a href="https://twitter.com/share?url=<?= $url; ?><?= $meme->nom; ?>" class="fa fa-twitter twitter"></a>

			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>

