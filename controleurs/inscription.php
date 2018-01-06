<?php

	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	$login = $_POST['login'];
	$password_un = $_POST['password_un'];
	$password_deux = $_POST['password_deux'];
	$coche = $_POST['statut'];
	

	//Test sur le login entré qui doit avoir la forme d'un mail
	$estValide_Login = false;
	if (empty($_POST['login'])){

	?>
		<script>
		alert('Le champ login est vide! Remplissez-le !');
		</script>
		<?php
	}
	else if (!preg_match("#[a-z]+[0-9]*(@)[a-z]+\.[a-z]{2,3}$#i", $_POST['login']))
	{
	?>
		<script>
		alert('Votre mail est cens\351 \352tre comme suit : suite_de_lettres@suite_de_lettres.2_ou_3_lettres');
		</script>
	<?php
	
	}
	else 
	{	
	$estValide_Login = true;
	$login = $_POST['login'];
	
	}

	//Test sur le mot de passe entré
	$estValide_mdp = false;
	if ($password_un != $password_deux)
	{
		?>
		<script>
		alert('Les mots de passe saisis ne correspondent pas!');
		</script>
		<?php
	}
	else 
	{
		$estValide_mdp = true;

	}
	$requete = mysqli_query($co, "SELECT numUtilisateur FROM Utilisateur WHERE loginUtilisateur = '".$login."'") or die ("erreur SELECT");
	$nombre_utilisateur = mysqli_num_rows($requete);


	//Si les deux conditions sont valides, un membre est créé
	if ($estValide_Login and $estValide_mdp and $nombre_utilisateur < 1 )
	{
	
		$nouveau_membre = new membre($co,$login,$password_un);
		if ($coche == "parent_membre")
		{
			header('Location: ../vues/accueil_parentmembre.php');
		}
		else header('Location: ../vues/accueil_president.php');
	}

	
	
?>