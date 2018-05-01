<?php session_start(); ?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>VOUS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="designaccueil.css" rel="stylesheet" type="text/css" />
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
	 
	 <h1> VOUS</h1>
	 
	 
	  <div class="introduction">
	 
	 <p> <?php echo '<p>'.$_SESSION['Phrase_d_intro'].'</p>'?> </p>
	 </div>
	 
	 <div class="photo_profil">
	 	 <p> <?php echo '<img src="'.$_SESSION['Lien_photo_profil'].'" width="190" height="190" alt""/>'?></p>
	 </div>
			
	 <div class="description">
	 <p><?php echo '<p>'.$_SESSION['Description'].'</p>'?> </p>
	 </div>
	 
	   <div class="experiences">
	 <h2>Mes Expériences</h2>
	 <p> A remplir </p>
	 </div>
	 
	 
	   <div class="formation">
	 <h2>Ma Formation</h2>
	 <p> A remplir </p>
	 </div>
	   <div class="competences">
	 	 <h2>Mes Compétences</h2>
	 <p> <?php echo '<p>'.$_SESSION['Phrase_d_intro'].'</p>'?></p>
	 </div>
	 
	 
	 </div>
	 
	
</body>
</html> 