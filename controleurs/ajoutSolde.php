<?php
	header('Location: ../vues/consulter_enfant.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	$selectionne = $_POST['liste_enfants'];
	$soldeNew = $_POST['soldeNouveau'];
	

	$modif = mysqli_query($co,"UPDATE ENFANT SET apportEnfant = '".$soldeNew."' WHERE prenomEnfant = '".$selectionne."'") or die( "erreur UPDATE");
	
	
?>