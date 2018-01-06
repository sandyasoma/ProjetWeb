<?php

Class membre {

	private $co;
	private $id;
	private $login;
	private $password;
	
	function __construct($co,$login,$password) {
		require_once('../modeles/connexion_bd.php');
		
		$requete = mysqli_query($co, "SELECT numUtilisateur FROM Utilisateur WHERE loginUtilisateur = '".$login."'") or die ("erreur SELECT");
		$nombre_utilisateur = mysqli_num_rows($requete);
		if ($nombre_utilisateur < 1)
		{
			$this->id = mysqli_insert_id($co);
			$insertion = mysqli_query($co,"INSERT INTO Utilisateur (numUtilisateur,loginUtilisateur,mdpUtilisateur) 
			VALUES ('".$id."','".$login."','".$password."')") or die( "erreur INSERT");
			$this->co = $co;
			$this->login = $login;
        	$this->password = $password;
        	mysqli_close($co);
				
		}
		else 
		{
			$row = mysqli_fetch_array($requete,MYSQL_ASSOC);
        	$this->id = $row['numUtilisateur'];
        	$this->co = $co;
        	$this->login = $login;
        	$this->password = $password;
        	mysqli_close($co);


		}
			
		}
		public function connexion ()
		{
			session_start();
			$_SESSION["login"]= $this->login;

	}
		public function deconnexion ()
		{
			session_destroy();
			mysqli_close($co);
		}
	
	

}
?>