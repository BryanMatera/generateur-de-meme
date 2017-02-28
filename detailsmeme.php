<?php 
	require 'connexion.php';

	$id_meme = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="images/memeDefaut/meme<?= $id_meme; ?>.jpg">
</body>
</html>