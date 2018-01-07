<?php
	header('Location: ../vues/formulaire_ajouterousupprimermembre.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	$login = $_POST['login'];
	$password = $_POST['password'];
	

	
	$estValide_Login = false;
	if (empty($_POST['login']))
	{

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

	
	$requete = mysqli_query($co, "SELECT numUtilisateur FROM Utilisateur WHERE loginUtilisateur = '".$login."' AND mdpUtilisateur = '".$password."'") or die ("erreur SELECT");
	$nombre_utilisateur = mysqli_num_rows($requete);


	
	if ($estValide_Login and $nombre_utilisateur < 1 )
	{
		$nouveau_membre = new membre($co,$login,$password);
	}
	
	else if ($nombre_utilisateur == 1)
	{
		?>
		<script>
		alert('Ce parent existe d\351j\340 !');
		</script>
		<?php
	}
	mysqli_close($co);
	
	?>
	
