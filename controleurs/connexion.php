<?php
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');
	//include '../vues/formulaire_inscription.php';
	$coche = $_POST['statut'];
	$pseudo = $_POST['login'];
	$password = $_POST['password_un'];
	
	setcookie('coche',$coche,time()+365*24*3600);
	$requete = mysqli_query($co, "SELECT numUtilisateur FROM Utilisateur WHERE loginUtilisateur = '".$login."' AND mdpUtilisateur = '".$password."'") or die ("erreur SELECT");
		$nombre_utilisateur = mysqli_num_rows($requete);
		if ($nombre_utilisateur == 1)
		{
			$membre = new membre($co,$login,$password);
			$membre->connexion();
			if ($_COOKIE['coche'] = "parent_membre")
			{
				header ('Location: ../vues/accueil_parentmembre.php');
			}
			else header('Location: ../vues/accueil_president.php');
	
		}

?>