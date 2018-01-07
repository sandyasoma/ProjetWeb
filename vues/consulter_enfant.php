<?php
include '../modeles/connexion_bd.php';
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<title>APERO</title>
</head>
<body>
	<form method="post" action="">
<?php
	
	$affichage = mysqli_query($co,'SELECT prenomEnfant FROM Enfant ORDER BY prenomEnfant ') or die ("erreur requete");
	echo'<label for = "liste_enfants"> Liste des parents membres </label> </br> <select name="liste_enfants" id="liste_enfants">';
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
			   name = "affichage"/>
</form>
<p> Solde : 
<?php
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
</p>

<form method="post" action="">		
		<input type = "submit"
			   value = "Faire une commande"
			   name = "command"/>
</form>
</body>
</html>