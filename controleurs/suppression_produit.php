<?php
	header('Location:../vues/ajouter_supprimerProduit.php');

	require_once('../modeles/connexion_bd.php');
	$commande = $_POST['liste_commande'];
	$suppression = mysqli_query($co,"DELETE FROM Commande WHERE numCommande = '".$commande."'");
	mysqli_close($co);


?>