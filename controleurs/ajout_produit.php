<?php
	header('Location:../vues/ajouter_supprimerProduit.php');

	require_once('../modeles/connexion_bd.php');

	$selectionne = $_POST['liste_produits'];
	$qte = $_POST['qteCo'];
	$requete=mysqli_query($co, "SELECT numProduit FROM Produit WHERE nomProduit ='".$selectionne."'") or die ("erreur SELECT");
	$tableau= mysqli_fetch_array($requete);
	$numProduit= $tableau['numProduit'];
	$requete2=mysqli_query($co, "INSERT INTO COMMANDE(qteCommande,numProduit) VALUES('".$qte."','".$numProduit."')") or die ("erreur INSERT");
	
?>
