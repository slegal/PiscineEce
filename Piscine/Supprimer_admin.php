
<?php session_start();
require 'fonction_recup-utilisateur.php'; 
;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Modifier le profil</title>
<meta charset="utf-8" />

<link href="design_modifier.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="fichier.js"></script>

<?php
//acces au num de session pour savoir qui est connecte
echo 'num connecte '; echo $_SESSION['Lien_photo_profil'];      
?>		
</head>
<body>
<h1>Supprimer un Utilisateur</h1>
<div class="introduction">
<h5> Vous pouvez ajouter supprimer le profil d'un utilisateur sur cette plateforme.</h5>
</div>

<div class="container">
  <form action="traitement-Supprimer_admin.php" method="POST">
   <div class="col-25">
           <label for="supprimer">Veuillez selectionner l'utilisateur que vous souhaitez supprimer:</label>
	  </div>
   <div class="col-25">
     

 <?php $tabami=recuputilisateur(); ?>
<input id="personne" name="personne" type="number" > choisir le num d'utilisateur à supprimer</input>
  

 
   </div>
     <div class="row">
      <input type="submit" value="Valider">
	  
    </div>
	 </div>
  </form>

</div>

</body>
</html>