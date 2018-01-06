<?php
	header('Location: ../vues/formulaire_ajouterousupprimerenfant.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');
	$nom = $_POST['nom_enfant'];
	$prenom = $_POST['prenom_enfant'];
	$naissance = $_POST['naissance_enfant'];
	$mail = $_POST['mail_enfant'];
	$telephone = $_POST['telephone_enfant'];
	$categorie = $_POST['categorie'];
	$solde = $_POST['solde_enfant'];
	$conso = 0;

	$id = mysqli_insert_id($co);
	$requete = mysqli_query($co, "SELECT numEnfant,nomEnfant FROM Enfant WHERE nomEnfant = '".$nom."' AND numEnfant = '".$id."'") or die ("erreur SELECT");
	$nombre_enfant = mysqli_num_rows($requete);
		if ($nombre_enfant < 1)
		{
			
			$insertion = mysqli_query($co,"INSERT INTO Enfant (numEnfant,nomEnfant,prenomEnfant,dateNaissEnfant,mailEnfant,telEnfant,categorieEnfant,apportEnfant,consoEnfant) VALUES('".$id."','".$nom."','".$prenom."','".$naissance."','".$mail."','".$telephone."','".$categorie."','".$solde."','".$conso."')");

		}