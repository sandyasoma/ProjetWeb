<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<title>APERO</title>
</head>
<body>
	<!--Formulaire ajout-->
<form method="post" action="../controleurs/insertion_enfant.php">
	<p> <b>Nom</b> </br> </p>
	<input type = "text"
			name = "nom_enfant"/>

	<p> <b>Prénom</b> </br> </p>
	<input type = "text"
			name = "prenom_enfant"/>

	<p> <b> Date de naissance </b> </br></p>
	<input type = "text"
		   name = "naissance_enfant"
		   placeholder="Ex : 01/01/2010"/>

	<p> <b> Mail </b> </br></p>
	<input type = "text"
		   name = "mail_enfant"
		   placeholder="Ex : xyz@abcd.com"/>

	<p> <b> Telephone</b> </br></p>
	<input type = "number"
		   name = "telephone_enfant"/> 
		   </br>
		   </br>
		<label for = "liste_parents"> Catégorie </label> </br>
	    <select name="categorie" id="categorie">
			<option>moins de 6 ans</option>
			<option>moins de 8 ans</option>
			<option>moins de 10 ans </option>
			<option>moins de 12 ans</option>
		</select>

	<p> <b> Solde initial</b> </br></p>
	<input type = "number"
		   name = "solde_enfant"/>

</br>
</br>			
		<input type = "submit"
			   value = "Insérer"/>
</form>
</br>
</br>


<!--Formulaire suppression-->
<form method="post" action="../controleurs/supprimer_enfant.php">
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT prenomEnfant FROM Enfant ORDER BY prenomEnfant ') or die ("erreur requete");
	echo'<label for = "liste_enfants"> Liste des parents membres </label> </br> <select name="liste_enfants" id="liste_enfants">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option>'.$row['prenomEnfant'].'</option>';
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