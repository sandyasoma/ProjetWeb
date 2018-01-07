<?php
	header('Location:../vues/formulaire_creer_produit.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	$selectionne = $_POST['liste_produits'];
	$prixNew = $_POST['prixNouveau'];
	

	$modif = mysqli_query($co,"UPDATE PRODUIT SET prixVenteProduit = '".$prixNew."' WHERE nomProduit = '".$selectionne."'") or die( "erreur UPDATE");
	mysqli_close($co);
	
?>