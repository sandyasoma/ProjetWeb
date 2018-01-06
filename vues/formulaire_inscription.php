
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
	
<form method="post" action="../controleurs/inscription.php">
<div class="block" style="background-color: rgba(255, 255, 255, 0.5)">
		<!--Lien Logo-->
		</br>
			<a href="accueil.php">

				<img id='logo' src="../images/logo.png" alt="logo"/>
			</a>
			</br>
	<h1>Inscription</h1>

	<p> <b> Votre statut : </b> <br> </p>
	<input type = "radio"
			name = "statut" id = "parent_membre" value = "parent_membre"/>
			<label for = "parent_membre"><b> Parent membre </b></label>
	
	<input type = "radio"
			name = "statut" id = "president" value = "president"/>
			<label for = "president"><b> Président </b></label>
	<br>
	

	<p> <b>Login</b> <br> </p>
	<input type = "text"
			name = "login"/>

	<p> <b>Mot de passe </b> <br> </p>
	<input type = "password"
			name = "password_un"/>

	<p> <b>Répéter mot de passe </b> <br> </p>
	<input type = "password"
			name = "password_deux"/>

<br>
<br>			
		<input type = "submit"
			   value = "Inscription" class="bold"/>

</form>
<div id="CopyrightBas">©Rugby Apero Orsay</div>
</div>
		</br>
	</body>
</html>
