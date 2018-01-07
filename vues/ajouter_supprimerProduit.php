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
	<h1>Ajouter ou Supprimer un produit dans la commande</h1>
	<nav>
	<ul>
  <li><a href="formulaire_ajouterousupprimermembre.php" title="aller à la section 1">Consulter compte enfant</a></li>
  <li><a href="formulaire_creer_produit.php" title="aller à la section 2">Ajouter/Supprimer Produit</a></li>
  <li><a href="formulaire_reinitialisation.php" title="aller à la section 3">Créer/Supprimer Compte enfant</a></li>
</ul>
</nav>
<!--affichage du tableau avec tous les produits-->

<div class="tableau">
	<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT * FROM produit ORDER BY nomProduit ') or die ("erreur requete");

echo "<table>
			    <tr>
					<th>Nom du produit</th>
				    <th>Quantité disponible</th>
					<th>Prix de vente</th>
					
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

			 //fermeture de la connexion		
?>
</div>
</br>
<form method="post" action="../controleurs/ajout_produit.php">	

<?php
	include '../modeles/connexion_bd.php';
	$affichage = mysqli_query($co,'SELECT nomProduit FROM produit ORDER BY nomProduit ') or die ("erreur requete");

	echo'<label for = "liste_produits"> <b>Liste des produits</b></label> </br> <select name="liste_produits" id="liste_produits">';
	while ($row = mysqli_fetch_assoc($affichage))
	{
		 echo '<option value="'.$row['nomProduit'].'">'.$row['nomProduit'].'</option>';
	}
	
?>
</select>	
</br>
<p> <b>Quantité commandée : </b> <br> </p>
	<input type = "text"
			name = "qteCo"/>
</br>			
		<input type = "submit"
			   value = "Ajouter" class="bold"/>			   
</form>

	
<div id="CopyrightBas">©Rugby Apero Orsay</div>
</div>
		</br>
	</body>
</html>