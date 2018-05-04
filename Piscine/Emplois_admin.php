<?php 
require 'fonction_recup-emploi.php';
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Emplois_admin</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<div class="publier">
	<h2> Vous souhaitez publier une offre d'emploi? </h2>
	 <div class="col-75">
	 <form action="traitement_ajouter_emploi_admin.php" method="POST">
	  <textarea input id="intitule_offre" name="intitule_offre" placeholder="Intitule de votre offre d'emploi..." style="height:20px"></textarea>
        <textarea id="description_offre" name="description_offre" placeholder="Decrivez votre offre d'emploi..." style="height:180px;margin-left:60px"></textarea>
		 <input class="button" type="submit" value="publier" /> 
		</form>
      </div>
	</div>
	 <?php $tabemploi=recupemploi();
	 
	 for ($i = sizeof($tabemploi)-1; $i > -1;$i--) ///NOMBRE DE DIV A FAIRE
	 {
		 
		 ?>
		<div class="emploi">
		<h2><?php
		echo $tabemploi[$i][4]; ///NOM
		echo " ";
		echo $tabemploi[$i][5];///PRENOM
		echo" a ajouté une offre d'emploi : " ;
		 echo $tabemploi[$i][3];
		 echo " le ";
		 echo $tabemploi[$i][2];
		 ?></h2>
		<p>  <?php echo $tabemploi[$i][1]?></p>
		</div>
		<?php
	 }
	 
	 
	 ?>
	 
	 </div>
</body>
</html> 