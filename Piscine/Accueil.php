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
	<form action="traitement_ajouter_emploi.php" method="post">
	 <div class="col-75">
	 <form>
        <textarea id="subject" name="subject" placeholder="Ecrivez quelque chose..." style="height:200px "></textarea>
		 <input class="button" type="submit" value="publier" /> 
		</form>
      </div>
	</div>
	 
	   <div class="publication">
	 <h2> <?php echo"NOM, PRENOM a publié un TYPE DE PUBLICATION. Se situe à ENDROIT à DDATE à HEURE et se sent EMOTIONS"?></h2>
	 <p> LA Publication</p>
	  <h5> <?php echo"Like commentaire publier"?></h5>
	 </div>
	 
	 
	
	 
	 
	 </div>
	 
	
</body>
</html> 