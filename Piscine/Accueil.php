<?php 
require 'fonction_recup-post.php';
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
	 
	 <h1> FIL D'ACTUALITE</h1>
	 
	 
	  <div class="introduction">
	 
	 <p> Bienvenu sur votre fil d'actualité, vous pouvez voir les dernières nouvelles de vos amis et de vos contacts professionels</p>
	 </div>
	
	<div class="publier">
	<h2> Vous souhaitez publier quelque chose? </h2>

	 <div class="col-75">
		<form action="traitement_ajouter_post.php" method="POST">
		<select  id="type" name="type">
		 <option value="texte">Texte</option>
    <option value="photo">Photo</option>
    <option value="video">Video</option>

	</select>
			 <textarea id="location" name="location" placeholder="Endoit où vous vous trouvez..." style="height:20px"></textarea>
	
		  <textarea id="emotion" name="emotion" placeholder="Comment vous sentez vous?..." style="height:20px"></textarea>
        <textarea id="subject" name="subject" placeholder="Ecrivez quelque chose..." style="height:200px; margin-left:60px "></textarea>
	
		 <input class="button" type="submit" value="publier" /> 
		</form>
      </div>
	</div>
	 

	 
 <?php $tabemploi=recuppost();
	 
	 for ($i = sizeof($tabemploi)-1; $i > -1;$i--) ///NOMBRE DE DIV A FAIRE
	 {
		 
		 ?>
		<div class="emploi">
		<h2><?php
		echo $tabemploi[$i][10]; ///NOM
		echo " ";
		echo $tabemploi[$i][9];///PRENOM
		echo" a publié un post de type" ;
		 echo $tabemploi[$i][8];
		 echo" Se situe à " ;
		  echo $tabemploi[$i][5];
		  		 echo", à19:59 se sent  " ;
		  echo $tabemploi[$i][6];?></?></h2>
		<p>  <?php echo $tabemploi[$i][4]?></p>
		</div>
		<?php
	 }
	 
	 
	 ?>
	 
	 
	 </div>
	 
	
</body>
</html> 