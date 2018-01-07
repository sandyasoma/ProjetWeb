<?php
	header('Location: ../vues/formulaire_ajouterousupprimermembre.php');
	
	require_once('../modeles/connexion_bd.php');
	$selectionne = $_POST['liste_parents'];
	$suppression = mysqli_query($co,"DELETE FROM Utilisateur WHERE loginUtilisateur = '".$selectionne."'");
	mysqli_close($co);
?>