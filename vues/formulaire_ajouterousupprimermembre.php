<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<title>APERO</title>
</head>
<body>
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
			   value = "Ajouter"/>
</form>
</br>
</br>

<!--Formulaire suppression-->
<form method="post" action="../controleurs/supprimer_parent.php">
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT loginUtilisateur FROM Utilisateur ORDER BY loginUtilisateur ') or die ("erreur requete");
	echo'<label for = "liste_parents"> Liste des parents membres </label> </br> <select name="liste_parents" id="liste_parents">';
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
			   value = "Supprimer"/>
</form>
</body>
</html>