<?php
	$host = "127.0.0.1"; // ou 127.0.0.1
	$user = "root";
	$bdd = "APERO"; // le nom de votre base de données
	$passwd = "";
	$co = mysqli_connect($host , $user , $passwd, $bdd) or die("erreur de connexion");
?>