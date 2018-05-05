<?php

require 'fonction_recup-amis.php';
require 'fonction_recup-personne.php';
require 'traitement_eux.php';



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Accueil</title>
<meta charset="utf-8" />

<link href="design_admin.css" rel="stylesheet" type="text/css" />
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
<div class="contenu" style=" height:1200px;">
	<div class="bandegauche">
	 <p></p>
	 </div> 
	 <h1> MON RESEAU</h1>
	 
	 
	 	<div class="introduction">
	<form action="Eux_admin.php" method='POST'>
	<label> Barre de recherche : <input type="text" id="recherche" name="recherche"> </label> 
	 <input class="button" type="submit" value="rechercher" /> 
	</form>
</div>
	 
	
	  <div class="gauche">
	 <h3>Mes amis</h3>
	 <?php $tabami=recupami(); 

	 for ($i = 0; $i < sizeof($tabami);$i++) ///NOMBRE DE DIV A FAIRE
	 {
		 
		$_SESSION['tmp2']= $tabami[$i][6];
	?>
	  <div class="amis">
	  		<div class="bin">
				<a href="fonction_enlever_amis_admin.php"> <img src="bin.jpg" width="50" height="50" alt"bin"></a>
	 			</div>
	 <h4> <?php 
	  echo "";
	  echo $tabami[$i][2] ;///PRENOM;
	 echo " ";
	 echo $tabami[$i][1] ;///NOM;
	 echo " ";
	 echo $tabami[$i][3] ;///ADRESSE EMAIL;

	  ?>	 </h4>
	 <p><?php $tabami[$i][4]?></p>
	 <div class="photo">
	 <p><?php echo '<img src="'.$tabami[$i][5].'" width="190" height="190" alt"photo_de_profil"/>'?></p>

	 </div>

	 </div>
	 <?php
	 }
	?>
	 
	 </div>

	 <div class="droite">
	  	 <h3> Proposition de nouvelles relations</h3>
	 	  
			<?php $tabpersonne= recuppersonne() ;
			
			for ($i = 0; $i < sizeof($tabpersonne);$i++) ///NOMBRE DE DIV A FAIRE
			{
			$_SESSION['tmp']= $tabpersonne[$i][4];

				?>
				<div class="nvamis">
				<div class="plus">
				<a href="fonction_ajout_amis_admin.php"> <img src="plus.png" width="44" height="44" alt"plus"></a>
	 			</div>
				<p><?php echo $tabpersonne[$i][2];
				echo " ";
				echo $tabpersonne[$i][1];
				?></p>
			 	<div class="photo">
				<p><?php echo '<img src="'.$tabpersonne[$i][3].'" width="190" height="190" alt"photo_de_profil"/>'?></p>
				</div>
				</div>
		
				
				<?php
				
			}
		   ?>
	 <h4> </h4>
	

	 </div>
	

	 
	 </div>

	 
	
</body>
</html> 