<?php 
	$nom_serveur = "localhost";
    $identifiant = "root";
    $mdp = "";
    $nom_bd = "mini_blog";
        
    $bdd = new PDO("mysql:host=$nom_serveur; dbname=$nom_bd", $identifiant, $mdp);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
