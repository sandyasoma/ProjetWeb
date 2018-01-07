<?php
	header('../vues/ajouter_supprimerProduit.php');

	require_once('../modeles/connexion_bd.php');

	$selectionne = $_POST['liste_produits'];
	$qte = $_POST['qteCo'];
	$requete=mysqli_query($co, "SELECT numProduit FROM Produit WHERE nomProduit ='".$selectionne."'") or die ("erreur SELECT");
	$tableau= mysqli_fetch_array($requete);
	$nomProduit=$tableau['nomProduit'];
	$numProduit= $tableau['numProduit'];
	$id = mysqli_insert_id($co);
	$requete2=mysqli_query($co, "INSERT INTO COMMANDE(numCommande,qteCommande,numProduit) VALUES('".$id."','".$qte."','".$numProduit."'") or die ("erreur INSERT");
	
?>