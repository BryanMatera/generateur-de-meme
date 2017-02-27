<!DOCTYPE html>
<html>
<head>
	<title>Je créé mon meme</title>

</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="image"/>
	<input type="submit" name="submit" value="Envoyer" />
</form>
<?php 

	require 'upoadFunc.php';

?>
</body>
</html>