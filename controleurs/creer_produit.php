<?php
	header('Location: ../vues/formulaire_creer_produit.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	$nom = $_POST['nom'];
	$qte = $_POST['qte'];
	$prix = $_POST['prix'];
	

	
	$estValide_nom = false;
	if (empty($_POST['nom']))
	{

	?>
		<script>
		alert('Le champ nom est vide! Remplissez-le !');
		</script>
		<?php
	}
	else if (!preg_match("[a-z]", $_POST['nom']))
	{
	?>
		<script>
		alert('le nom du produit doit être composé de lettres');
		</script>
	<?php
	
	}
	else 
	{	
	$estValide_nom = true;
	$login = $_POST['nom'];
	
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
	
	?>
	
