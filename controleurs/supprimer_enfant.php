<?php
	header('Location: ../vues/formulaire_ajouterousupprimerenfant.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');


	$selectionne = $_POST['liste_enfants'];
	$suppression = mysqli_query($co,"DELETE FROM Enfant WHERE prenomEnfant = '".$selectionne."'");

?>