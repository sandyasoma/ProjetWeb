<!doctype html>

	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<link rel = "shortcut icon" type = "image x-icon" href = "../images/logo.png"/>
			<link rel="stylesheet" type="text/css" href="style_Accueil.css">
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
		<h1>Bienvenue dans Rugby Apero Orsay !! </h1>
		
		
		<!--Slide-->	
			<span id="sl_play" class="sl_command"></span>
			<span id="sl_pause" class="sl_command"></span>
 
			<span id="sl_i1" class="sl_command sl_i"></span>
			<span id="sl_i2" class="sl_command sl_i"></span>
			<span id="sl_i3" class="sl_command sl_i"></span>
			<span id="sl_i4" class="sl_command sl_i"></span>
			
			<section id="slideshow">
				<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
				<a class="commands prev commands1" href="#sl_i4" title="Aller à la dernière slide">&lt;</a>
				<a class="commands next commands1" href="#sl_i2" title="Aller à la 2ème slide">&gt;</a>
				<a class="commands prev commands2" href="#sl_i1" title="Aller à la 1ère slide">&lt;</a>
				<a class="commands next commands2" href="#sl_i3" title="Aller à la 3ème slide">&gt;</a>
				<a class="commands prev commands3" href="#sl_i2" title="Aller à la 2ème slide">&lt;</a>
				<a class="commands next commands3" href="#sl_i4" title="Aller à la 4ème slide">&gt;</a>
				<a class="commands prev commands4" href="#sl_i3" title="Aller à la 3ème slide">&lt;</a>
				<a class="commands next commands4" href="#sl_i1" title="Aller à la 1ère slide">&gt;</a><a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>
		
				<div class="container">
				<div class="c_slider"></div>
					<div class="slider">
						<figure>
							<img src="../images/image_slide9.jpg" alt="" width="640" height="310" />

						</figure>
						<figure>
							<img src="../images/image_slide1.jpg" alt="" width="640" height="310" />
						</figure>
						<figure>
							<img src="../images/image_slide2.jpg" alt="" width="640" height="310" />

						</figure>
						<figure>
							<img src="../images/image_slide6.jpg" alt="" width="640" height="310" />
						</figure>
					</div>
				</div>
		
	<span id="timeline"></span>
	<ul class="dots_commands">-
		<li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li>
		<li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li>
		<li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li>
		<li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
	</ul>
			</section>
	
	<p> Vous trouverez dans ce site un moyen de gérer le goûter de vos enfants. Connectez vous en tant que parent ou président :</p>
	<a href="formulaire_connexion.php" class="bouton5">Connexion</a>
		</br>
		<a href="formulaire_inscription.php" class="bouton5">Inscription</a>
		</br>
	
	
	</div>		
	</body>
	
</html>
