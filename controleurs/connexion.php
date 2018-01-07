<?php
	
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');
	if (isset($_POST['statut']))
	{
		$coche = $_POST['statut'];
	}
	if (isset($_POST['login']))
	{
		$login = $_POST['login'];
	}
	if (isset($_POST['password']))
	{
		$password = $_POST['password'];
	}
	
	$requete = mysqli_query($co, "SELECT numUtilisateur FROM Utilisateur WHERE loginUtilisateur = '".$login."' AND mdpUtilisateur = '".$password."'") or die ("erreur SELECT");
		$nombre_utilisateur = mysqli_num_rows($requete);
		if ($nombre_utilisateur == 1)
		{
			$membre = new membre($co,$login,$password);
			$membre->connexion();
			
			if ($coche == "parent_membre")
		{
			header('Location: ../vues/accueil_parentmembre.php');
		}
		else header('Location: ../vues/accueil_president.php');
	}
	mysqli_close($co);

?>