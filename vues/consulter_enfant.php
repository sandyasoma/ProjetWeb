
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"/>

			<link rel="stylesheet" type="text/css" href="style_general.css">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<title>APERO</title>
</head>
<body>
<div class="block" style="background-color: rgba(255, 255, 255, 0.5)">
		<!--Lien Logo-->
		</br>
			<a href="accueil.php">

				<img id='logo' src="../images/logo.png" alt="logo"/>
			</a>
			</br>
		<h1>Consulter le compte de votre enfant </h1>
		<nav>
	<ul>
  <li><a href="consulter_enfant.php" title="aller à la section 1">Consulter compte enfant</a></li>
  <li><a href="ajouter_supprimerProduit.php" title="aller à la section 2">Ajouter/Supprimer Produit</a></li>
  <li><a href="formulaire_ajouterousupprimerenfant.php" title="aller à la section 3">Créer/Supprimer Compte enfant</a></li>
</ul>
</nav>
</br>
</br>
	<form method="post" action="../controleurs/ajoutSolde.php">
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT prenomEnfant FROM Enfant ORDER BY prenomEnfant ') or die ("erreur requete");
	echo'<label for = "liste_enfants"><b> Liste des enfants membres </b></label> </br> <select name="liste_enfants" id="liste_enfants">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option>'.$row['prenomEnfant'].'</option>';
	}
	?>
	</select>
</br>
</br>
<p> <b>Modifier Solde : </b>  </p>
	<input type = "text"
			name = "soldeNouveau"/>
</br>	
</br>		
		<input type = "submit"
			   value = "Modifier" class="bold"/>
</form>
</br>
</br>
<form method="post" action="">
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT prenomEnfant FROM Enfant ORDER BY prenomEnfant ') or die ("erreur requete");
	echo'<label for = "liste_enfants"><b> Liste des enfants membres </b></label> </br> <select name="liste_enfants" id="liste_enfants">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option>'.$row['prenomEnfant'].'</option>';
	}
	?>
	</select>
</br>
</br>			
		<input type = "submit"
			   value = "Afficher"
			   name = "affichage"  class="boutonAccueil"/>
</br>
<b> Solde : 
<?php
include '../modeles/connexion_bd.php';
if (isset($_POST['affichage']))
{
	
	$enfant_choisi = $_POST['liste_enfants'];
	$solde = mysqli_query ($co,"SELECT solde FROM VUE_SOLDE WHERE prenomEnfant = '".$enfant_choisi."'");
	while ($row = mysqli_fetch_assoc($solde))
	{
		 echo ''.$row['solde'].'';
	}
}

?>

</b>
</br>
</br>
</br>
</form>
<form method="post" action="">		
		<input type = "submit"
			   value = "Faire une commande"
			   name = "command" class="boutonAccueil"/>
</form>
<div id="CopyrightBas">©Rugby Apero Orsay</div>
		</div>
		</br>
	</body>
</html>