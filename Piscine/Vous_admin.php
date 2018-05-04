<?php 
session_start(); //permet d'acceder aux infos de l'utilisateur recuperee dans verif_mp_email
require 'fonction_recup-exp.php';
require 'fonction_recup-comp-suivie.php';
require 'fonction_recup-comp.php';
require 'fonction_recup-interet-suivi.php';
require 'fonction_recup-interet.php';
require 'fonction_recup-form-suivie.php';
require 'fonction_recup-form.php';

?>

<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>VOUS_admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="design_admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="fichier.js"></script>
<?php
//acces au num de session pour savoir qui est connecte
echo 'num connecte '; echo $_SESSION['Lien_photo_profil'];      
?>		
</head>
<body>

<div class="tete">
<header>
<div class="logo">
        <img src="ece_logo.jpg" alt="Logo de l'Ece" width="100" height="100" >
		</div>
<div class="navigation">
<nav>
<ul>
 <li><a href="Accueil_admin.php">Accueil</a></li>
  <li><a href="Vous_admin.php">Vous</a></li>
<li><a href="Reseau_admin.php">Mon réseau</a></li>
  <li><a href="Notifications_admin.php">Mes notifications</a></li>
  <li><a href="Emplois_admin.php">Emplois</a></li>
    <li><a href="Ajouter_admin.php">Ajouter utilisateur</a></li>
    <li><a href="Supprimer_admin.php">Supprimer utilisateur</a></li>
 </ul> 
 </nav>
 </div>
	 </header>
	 
</div>
<div class="contenu">
	  <div class="crayon">
	<a href="modifier_utilisateur.php"> <img src="crayon.png" width="60" height="60" alt"crayon modifier"></a>
	 </div>
	 <h1> VOUS</h1>
	 

	  <div class="introduction">
	
	 <p> <?php echo '<p>'.$_SESSION['Phrase_d_intro'].'</p>'?> </p>
	 </div>
	 
	 <div class="photo_profil">
	 	 <p> <?php echo '<img src="'.$_SESSION['Lien_photo_profil'].'" width="190" height="190" alt"photo_de_profil"/>'?></p>
	 </div>
			
	 <div class="description">
	 <p><?php echo '<p>'.$_SESSION['Description'].'</p>'?> </p>
	 </div>
	 
	   <div class="experiences">
	 <h2>Mes Experiences</h2>
	 <p> <?php recupexp($_SESSION['Num_utilisateur']) ?> </p>
	 </div>
	 
	 
	   <div class="formation">
	 <h2>Mes Formation</h2>

	 <p> <?php recupform(recupformsuivie($_SESSION['Num_utilisateur']))?></p>
	 </div>
	   <div class="competences">
	 	 <h2>Mes Compétences</h2>
	 <p><?php recupcomp(recupcompsuivie($_SESSION['Num_utilisateur']))?></p>
	 </div>
	 
	 	   <div class="interet">
	 	 <h2>Mes centres d'interet </h2>
	 <p> <?php recupinteret(recupinteretsuivi($_SESSION['Num_utilisateur']))?></p>
	 </div>
	 
	 
	 </div>
	 
	
</body>
</html> 