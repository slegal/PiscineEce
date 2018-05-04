<?php
session_start();
require 'fonction_recup-amis.php';
require 'fonction_recup-personne.php';


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Accueil</title>
<meta charset="utf-8" />

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
	<div class="bandegauche">
	 <p></p>
	 </div> 
	 <h1> MON RESEAU</h1>
	 
	 
	  <div class="introduction">
<p> Vous trouverez sur cette page tous vos contacts et vos relations ainsi que des propositions de nouvelles connexions</p>
	 </div>
	 
	 	<div class="introduction">
	<form method='POST'>
	<label> Barre de recherche : <input type="text" name="recherche"> </label> 
	 <input class="button" type="submit" value="rechercher" /> 
	</form>
</div>
	  <div class="gauche">
	 <h3>Mes amis</h3>
	 <?php $tabami=recupami(); 

	 for ($i = 0; $i < sizeof($tabami);$i++) ///NOMBRE DE DIV A FAIRE
	 {
		 echo $tabami[$i][6];
		$_SESSION['tmp2']= $tabami[$i][6];
	?>
	  <div class="amis">
	  		<div class="crayon">
				<a href="fonction_enlever_amis.php"> <img src="crayon.png" width="60" height="60" alt"crayon modifier"></a>
	 			</div>
	 <h4> <?php  echo "";
	  echo $tabami[$i][2] ;///PRENOM;
	 echo " ";
	 echo $tabami[$i][1] ;///NOM;
	 echo " ";
	 echo $tabami[$i][3] ;///ADRESSE EMAIL;
	  ?></h4>
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
				<div class="crayon">
				<a href="fonction_ajout_amis.php"> <img src="plus.png" width="60" height="60" alt"crayon modifier"></a>
	 			</div>
				<p>	<?php echo $tabpersonne[$i][2];
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