<?php
	header('Location: ../vues/formulaire_creer_produit.php');
	require_once('../modeles/membre.php');
	require_once('../modeles/connexion_bd.php');

	
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
	else if (!preg_match("#[a-z]#i", $_POST['nom']))
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
	$nom = $_POST['nom'];
	
	}

	
	$requete = mysqli_query($co, "SELECT numProduit FROM Produit WHERE nomProduit = '".$nom."'") or die ("erreur SELECT");
	$nombre_produit = mysqli_num_rows($requete);


	
	if ($estValide_nom and $nombre_produit < 1 )
	{
		$id = mysqli_insert_id($co);
		$requete2= mysqli_query($co,"INSERT INTO Produit (numProduit, nomProduit,qteProduitDispo,prixVenteProduit) 
			VALUES ('".$id."','".$nom."','".$qte."','".$prix."')") or die( "erreur INSERT");
			mysqli_close($co);
	}
	
	else if ($nombre_produit == 1)
	{
		?>
		<script>
		alert('Ce parent existe d\351j\340 !');
		</script>
		<?php
	}
	
	?>
	
