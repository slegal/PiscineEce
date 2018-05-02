<?php 
require 'fonction_recup-emploi.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Accueil</title>

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
	 
	 <h1> EMPLOIS</h1>
	 
	 
	  <div class="introduction">
	 
	 <p> Sur cette page, vous trouverez les offres d'emploi déposées par les différents membres de votre réseau</p>
	 </div>
	 
	<div class="introduction">
	<form method='POST'>
	<label> Barre de recherche : <input type="text" name="recherche"> </label> 
	 <input class="button" type="submit" value="publier" /> 
	</form>
</div>
	 <?php $tabemploi=recupemploi();
	 
	 for ($i = 0; $i < sizeof($tabemploi);$i++) ///NOMBRE DE DIV A FAIRE
	 {
		 
		 ?>
		<div class="emploi">
		<h2><?php
		echo $tabemploi[$i][4]; ///NOM
		echo " ";
		echo $tabemploi[$i][5];///PRENOM
		echo" ajoute une offre d'emplois :" ;
		 echo $tabemploi[$i][3];?></h2>
		<p>  <?php echo $tabemploi[$i][1]?></p>
		</div>
		<?php
	 }
	 
	 
	 ?>
	 

	 
	 
	 
	 </div>
</body>
</html> 