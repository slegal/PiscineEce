<?php 
require 'fonction_recup-post.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Accueil_admin</title>
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
	<li><a href="Connexion.php">Se deconnecter</a></li>
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
		<form action="traitement_ajouter_post_admin.php" method="POST" enctype="multipart/form-data" >
		<select  id="type" name="type">
		 <option value="texte">Texte</option>
    <option value="photo">Photo</option>
    <option value="video">Video</option>

	</select>

			 <textarea id="location" name="location" placeholder="Endoit où vous vous trouvez..." style="height:20px"></textarea>
	
		   
		  	<select  id="emotion" name="emotion">
		 <option value="texte">Content</option>
    <option value="heureux">Heureux</option>
    <option value="triste">Triste</option>
	 <option value="anxieux">Anxieux</option>
    <option value="appeure">Appeuré</option>
    <option value="amoureux">Amoureux</option>
			 <option value="joyeux">Joyeux</option>
    <option value="fier">Fier</option>
    <option value="bien">Bien </option>
	 <option value="merveilleusement_bien">Merveilleusement bien</option>
    <option value="decu">Deçu</option>
    <option value="choque">Choque</option>
	    <option value="radieux">Radieux</option>
    <option value="colere">En colère</option>

	</select>
        <textarea id="subject" name="subject" placeholder="Ecrivez quelque chose..." style="height:200px "></textarea></br>
		<input type="file" name="monfichier" /></br>
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
		echo" a publié un post de type " ;
		 echo $tabemploi[$i][8];
		echo" Se situe à " ;
		echo $tabemploi[$i][5];
		echo", se sent  " ;
		  echo $tabemploi[$i][6];?></?></h2>
		<p>  <?php if($tabemploi[$i][8]=="photo")
		{
			 echo '<img src="'.$tabemploi[$i][4].'" width="190" height="190" alt"photo_de_profil"/>';
		}

		if($tabemploi[$i][8]=="video")
		{
			?>
	<video width="320" height="240" controls >
  
  <source src="<?php echo $tabemploi[$i][4] ?>" type="video/mp4">

</video>
<?php
		}
		?>
		<?php if($tabemploi[$i][8]=="texte")
		{
echo $tabemploi[$i][4];
		}
		?>
		
		
		</p>
		</div>
		<?php
	 }
	 
	 
	 ?>
	 
	 
	 </div>
	      <a href="Accueil_admin.php">   Retour</a>
	
</body>
</html> 