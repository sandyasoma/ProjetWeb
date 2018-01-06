<!doctype html>

	<html lang="fr">
		<head>
			<meta charset="utf-8">
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
		<h1>Bienvenue !! Que souhaitez-vous faire ? </h1>
		
		<form method = "post" action="consulter_enfant.php">
	<input type = "submit"
		   value = "Consulter compte enfant" id="reset" class="boutonAccueil"/>
</form>
</br>
<form method = "post" action="consulter_enfant.php">
	<input type = "submit"
		   value = "Ajouter/Supprimer un produit" id="reset" class="boutonAccueil"/>
</form>
</br>
<form method = "post" action="consulter_enfant.php">
	<input type = "submit"
		   value = "Créer/Supprimer un enfant" id="reset" class="boutonAccueil"/>
</form>
<div id="CopyrightBas">©Rugby Apero Orsay</div>
		</div>
		</br>
	</body>
</html>
