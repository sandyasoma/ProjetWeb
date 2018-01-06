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
	<h1>Créer un produit</h1>
	<ul id="navigation">
  <li><a href="formulaire_ajouterousupprimermembre.php" title="aller à la section 1">Ajouter/Supprimer Parent membre</a></li>
  <li><a href="formulaire_creer_produit.php" title="aller à la section 2">Créer un produit dans la BD</a></li>
  <li><a href="formulaire_reinitialiser.php" title="aller à la section 3">Réinitialiser la BD</a></li>
</ul>
<!--formulaire création produit-->
<form method="post" action="../controleurs/creer_produit.php">
	<input type = "radio"
			name = "statut" id = "parent_membre" value = "parent_membre"/>
			<label for = "parent_membre"><b> Goûter </b></label>
	
	<input type = "radio"
			name = "statut" id = "president" value = "president"/>
			<label for = "president"><b> Produit brut </b></label>
			
		<p> <b>Nom</b> <br> </p>
	<input type = "text"
			name = "nom"/>

	<p> <b>Quantité initiale</b> <br> </p>
	<input type = "text"
			name = "qte"/>

	<p> <b>Prix de vente </b> <br> </p>
	<input type = "text"
			name = "prix"/>

<div id="CopyrightBas">©Rugby Apero Orsay</div>
	</div>
	
</body>

</html>