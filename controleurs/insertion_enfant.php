<?php
	header('Location: ../vues/formulaire_ajouterousupprimerenfant.php');
	require_once('../modeles/connexion_bd.php');
	if (isset($_POST['nom_enfant']))
	{
		$nom = $_POST['nom_enfant'];
	}
	if (isset($_POST['prenom_enfant']))
	{
		$prenom = $_POST['prenom_enfant'];
	}
	if (isset($_POST['naissance_enfant']))
	{
		$naissance = $_POST['naissance_enfant'];
	}
	if (isset($_POST['mail_enfant']))
	{
		$mail = $_POST['mail_enfant'];
	}
	if (isset($_POST['telephone_enfant']))
	{
		$telephone = $_POST['telephone_enfant'];
	}
	if (isset($_POST['categorie']))
	{
		$categorie = $_POST['categorie'];
	}
	if (isset($_POST['solde_enfant']))
	{
		$solde = $_POST['solde_enfant'];
	}
	
	$conso = 0;

	$id = mysqli_insert_id($co);
	$requete = mysqli_query($co, "SELECT numEnfant,nomEnfant FROM Enfant WHERE nomEnfant = '".$nom."' AND numEnfant = '".$id."'") or die ("erreur SELECT");
	$nombre_enfant = mysqli_num_rows($requete);
		if ($nombre_enfant < 1)
		{
			
			$insertion = mysqli_query($co,"INSERT INTO Enfant (numEnfant,nomEnfant,prenomEnfant,dateNaissEnfant,mailEnfant,telEnfant,categorieEnfant,apportEnfant,consoEnfant) VALUES('".$id."','".$nom."','".$prenom."','".$naissance."','".$mail."','".$telephone."','".$categorie."','".$solde."','".$conso."')");

		}
	mysqli_close($co);
	?>