<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<meta name="viewport" content="width=device-width"/>
<link rel="stylesheet" type="text/css" href="style_general.css">
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
	<h1>Ajouter/Supprimer un membre</h1>
	<nav>
	<ul id="navigation">
  <li><a href="formulaire_ajouterousupprimermembre.php" title="aller à la section 1">Ajouter/Supprimer Parent membre</a></li>
  <li><a href="formulaire_creer_produit.php" title="aller à la section 2">Créer un produit dans la BD</a></li>
  <li><a href="formulaire_reinitialisation.php" title="aller à la section 3">Réinitialiser la BD</a></li>
</ul>
</nav>
</br>
<!--Formulaire ajout-->
<form method="post" action="../controleurs/insertion_parent.php">
	<p> <b>Login</b> </br> </p>
	<input type = "text"
			name = "login"/>

	<p> <b>Mot de passe </b> </br> </p>
	<input type = "password"
			name = "password"/>
</br>
</br>			
		<input type = "submit"
			   value = "Ajouter" class="bold"/>
</form>
</br>
</br>

<!--Formulaire suppression-->
<form method="post" action="../controleurs/supprimer_parent.php">
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT loginUtilisateur FROM Utilisateur ORDER BY loginUtilisateur ') or die ("erreur requete");
	echo'<label for = "liste_parents"> <b>Liste des parents membres </b></label> </br> <select name="liste_parents" id="liste_parents">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option value="'.$row['loginUtilisateur'].'">'.$row['loginUtilisateur'].'</option>';
	}
	mysqli_close($co);
	?>
</select>
</br>
</br>			
		<input type = "submit"
			   value = "Supprimer" class="bold"/>
</form>
<div id="CopyrightBas">©Rugby Apero Orsay</div>
	</div>
	
</body>

</html>