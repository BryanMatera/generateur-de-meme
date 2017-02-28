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
		foreach ($memes as $meme) : ?>
			<a href="detailsmeme.php?id=<?= $meme->id;?>"><img class="memedefaut" src="images/memeDefaut/meme<?= $meme->id; ?>.jpg"/></a>

		<?php endforeach; ?> 
	</div>
</body>
</html>

