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
	 
	 <h1> MES NOTIFICATIONS</h1>
	
  <div class="introduction">
	 <p> Vos dernières notifications </p>
	 </div>	
 <?php $tabemploi=recuppost();
	 
	 for ($i = sizeof($tabemploi)-1; $i > -1;$i--) ///NOMBRE DE DIV A FAIRE
	 {
		 
		 ?>
		<div class="notification">
		<?php
		echo $tabemploi[$i][10]; ///NOM
		echo " ";
		echo $tabemploi[$i][9];///PRENOM
		echo" a publié un post de type " ;
		echo $tabemploi[$i][8]
	
		 ?>
	 </div>
	<?php }
			?>
	 
	 
	 </div>
	 
	
</body>
</html> 