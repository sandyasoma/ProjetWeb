<?php
	header('Location: ../vues/accueil_president.php');
	require_once('../modeles/connexion_bd.php');
	
$solde_nul = mysqli_query($co,"UPDATE Enfant SET apportEnfant = 0, consoEnfant = 0");
mysqli_close($co);
?>
