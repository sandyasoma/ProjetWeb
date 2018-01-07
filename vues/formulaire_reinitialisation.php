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
	<h1> Réinitialiser la base de données </h1>
	<nav>
	<ul>
  <li><a href="formulaire_ajouterousupprimermembre.php" title="aller à la section 1">Ajouter/Supprimer Parent membre</a></li>
  <li><a href="formulaire_creer_produit.php" title="aller à la section 2">Créer un produit dans la BD</a></li>
  <li><a href="formulaire_reinitialisation.php" title="aller à la section 3">Réinitialiser la BD</a></li>
</ul>
</nav>
<form method="post" action="../controleurs/reinitialisation.php">

</br>
</br>
<input type = "submit"
       value = "Réinitialiser" class="bold"/>
   </form>
<div id="CopyrightBas">©Rugby Apero Orsay</div>
	</div>
	
</body>

</html>