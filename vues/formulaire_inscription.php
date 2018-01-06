
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
<title>APERO</title>
</head>
<body>
	
<form method="post" action="../controleurs/inscription.php">
	<h1>Inscription</h1>

	<p> <b> Votre statut : </b> <br> </p>
	<input type = "radio"
			name = "statut" id = "parent_membre" value = "parent_membre"/>
			<label for = "parent_membre"> Parent membre </label>
	
	<input type = "radio"
			name = "statut" id = "president" value = "president"/>
			<label for = "president"> Président </label>
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
			   value = "Inscription"/>

</form>
</body>
