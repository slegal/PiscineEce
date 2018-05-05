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
<title>VOUS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="designaccueil.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="fichier.js"></script>
	
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
 <li><a href="Accueil.php">Accueil</a></li>
  <li><a href="Vous.php">Vous</a></li>
<li><a href="Reseau.php">Mon réseau</a></li>
  <li><a href="Notifications.php">Mes notifications</a></li>
  <li><a href="Emplois.php">Emplois</a></li>
 </ul> 
 </nav>
 </div>
	 </header>
	  
</div>
<div class="contenu">



	 <h1> EUX</h1>
	 <?php 
	 $dataname=$_POST['recherche']; ///TRUC QUI CHOPE LE RECHERCHE

	 $database='linkece';
	 $db_handle=mysqli_connect('localhost', 'root','');
	 $db_found=mysqli_select_db($db_handle,$database);
	 
	 
	 
		 if($db_found) {
			 
			 $sql = "SELECT * FROM utilisateur WHERE Prenom = '$dataname'"; ///REQUETE SQL POUR AVOIR LE NOM EN PASSANT PAR EMPLOI
			 $result = mysqli_query($db_handle, $sql);		
		
		 
				
			
	 
				 foreach  ($db_handle->query($sql) as $row) {
	 
					 $tabeux[0] = $row['Nom']; ///LA 4eme CASE DU TABLEAU CONTIENT LE NOm
					 $tabeux[1] = $row['Prenom']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
					 $tabeux[2] = $row['Adresse_email']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
					 $tabeux[3] = $row['Description']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
					 $tabeux[4] = $row['Lien_photo_profil']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
					 $tabeux[5] = $row['Num_utilisateur']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
					 $tabeux[6] = $row['Phrase_d_intro'];
					 $tabeux[7] = $row['Pseudo'];
					 $tabeux[8] = $row['Phrase_d_intro'];
					 $tabeux[9] = $row['Mot_de_passe'];

					 $_SESSION['Nom2']=$tabeux[0];
					 $_SESSION['Prenom2']=$tabeux[1];
					 $_SESSION['Adresse_email2']=$tabeux[2];
					 $_SESSION['Description2']=$tabeux[3];
					 $_SESSION['Lien_photo_profil2']=$tabeux[4];
					 $_SESSION['Num_utilisateur2']=$tabeux[5];
					 $_SESSION['Phrase2']=$tabeux[6];
					 $_SESSION['Pseudo2']=$tabeux[7];
					 $_SESSION['Phrase_d_intro2']=$tabeux[8];
					 $_SESSION['Mot_de_passe2']=$tabeux[9];
					

				   
					 
	 
				 }
	 
			 
			}
	 
		 
		 else { echo "Base de données non trouvée."; }
	 
	 mysqli_close($db_handle);


	 
	 ?>

	  <div class="introduction">
	
	 <p> <?php echo '<p>'.$_SESSION['Phrase2'].'</p>'?> </p>
	 </div>
	 
	 <div class="photo_profil">
	 	 <p> <?php echo '<img src= "'.$_SESSION['Lien_photo_profil2'].'" width="190" height="190" alt"photo_de_profil"/>'?></p>
	 </div>
			
	 <div class="description">
	 <p><?php echo '<p>'.$_SESSION['Description2'].'</p>'?> </p>
	 </div>
	 
	   <div class="experiences">
	 <h2>Mes Experiences</h2>
	 <p> <?php recupexp($_SESSION['Num_utilisateur2']) ?> </p>
	 </div>
	 
	 
	   <div class="formation">
	 <h2>Mes Formation</h2>

	 <p> <?php recupform(recupformsuivie($_SESSION['Num_utilisateur2']))?></p>
	 </div>
	   <div class="competences">
	 	 <h2>Mes Compétences</h2>
	 <p><?php recupcomp(recupcompsuivie($_SESSION['Num_utilisateur2']))?></p>
	 </div>
	 
	 	   <div class="interet">
	 	 <h2>Mes centres d'interet </h2>
	 <p> <?php recupinteret(recupinteretsuivi($_SESSION['Num_utilisateur2']))?></p>
	 </div>
	 
	 
	 </div>
	 
	
</body>
</html> 