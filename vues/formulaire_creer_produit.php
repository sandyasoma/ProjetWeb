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
			name = "statut" id = "gouter" value = "gouter"/>
			<label for = "gouter"><b> Goûter </b></label>
	
	<input type = "radio"
			name = "statut" id = "produit" value = "produit"/>
			<label for = "produit"><b> Produit brut </b></label>
			
		<p> <b>Nom</b> <br> </p>
	<input type = "text"
			name = "nom"/>

	<p> <b>Quantité initiale</b> <br> </p>
	<input type = "text"
			name = "qte"/>

	<p> <b>Prix de vente </b> <br> </p>
	<input type = "text"
			name = "prix"/>
			
	<input type = "submit"
			   value = "Ajouter" class="bold"/>
	</form>
			   
	<!--Formulaire modif-->
<form method="post" action="../controleurs/modif_produit.php">
	
<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT * FROM produit ORDER BY nomProduit ') or die ("erreur requete");

	echo'<label for = "liste_produits"> <b>Liste des produits</b></label> </br> <select name="liste_produits" id="liste_produits">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option value="'.$row['nomProduit'].'">'.$row['nomProduit'].'</option>';
	}
	mysqli_close($co);
?>
	
</select>

	<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT * FROM produit ORDER BY nomProduit ') or die ("erreur requete");
echo "<table>
			    <tr>
					<th>Nom du produit</th>
				    <th>Quantité</th>
					<th>Stock</th>
					
			    </tr>";
				
				// Afficher les résultats
				while ($row = mysqli_fetch_assoc($affichage)) {
					echo "<tr>
							<td>".$row['nomProduit']."</td>
							<td>".$row['qteProduitDispo']."</td>
							<td>".$row['prixVenteProduit']."</td>
							
						</tr>";
					}
				echo "</table>";

				mysqli_close($co); //fermeture de la connexion		
?>
<input type = "submit"
			   value = "Modifier" class="bold"/>
	</form>

<div id="CopyrightBas">©Rugby Apero Orsay</div>
	</div>
	
</body>

</html>