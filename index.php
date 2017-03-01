<?php 
	session_start();
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
		<a class="logo" href="index.php">FQM<span >Faites qu'on meme</span></a>
		<a class="creer" href="creationmemes.php">Je créé mon meme</a>
	</header>
	</br>
	<div class="memepresentation">
		<?php 
		$memes = $DB->query('SELECT * FROM memedefaut ORDER BY id DESC');
		$url = "http://localhost/13_meme_generator/detailsmeme.php?id=";

		foreach ($memes as $meme) :	?>
			<div class="meme">
			<a href="detailsmeme.php?id=<?= $meme->nom; ?>&name=<?= $meme->auteur; ?>"><img class="memedefaut" src="images/memeFini/<?= $meme->nom; ?>.png"/></a>
			<p><?= $meme->nom; ?></p>
			<p>Créé par : <?= $meme->auteur; ?></p>
			<a href="http://www.facebook.com/sharer/sharer.php?url=<?= $url; ?><?= $meme->nom; ?>" class="fa fa-facebook twitter" target="_blank"></a>
			<a href="https://twitter.com/intent/tweet/?url=<?= $url; ?><?= $meme->nom; ?>" class="fa fa-twitter twitter" target="_blank"></a>

			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>

