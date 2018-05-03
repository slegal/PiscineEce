
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Modifier le profil</title>
<meta charset="utf-8" />

<link href="design_modifier.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="fichier.js"></script>

	
</head>
<body>
<h1>Ajouter un utilisateur</h1>
<div class="introduction">
<p> Vous pouvez ajouter un utilisateur sur cette page. Il vous suffit de rentrer son nom, son prénom, son adresse E-mail ainsi que son Mot de passe de l'ece afin de créer son profil 
sur LinkECE.</p>
</div>

<div class="container">
  <form action="traitement_Ajouter_admin.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="prenom">Prénom</label>
      </div>
      <div class="col-25">
     <input type="text" id="prenom" name="prenom"  placeholder="Son prénom..." >
      </div>
    </div>
   
    <   <div class="row">
      <div class="col-25">
        <label for="nom">Prénom</label>
      </div>
      <div class="col-25">
     <input type="text" id="nom" name="nom"  placeholder="Son nom..." >
      </div>
    </div>
  
	   <div class="row">
      <div class="col-25">
        <label for="mail">Prénom</label>
      </div>
      <div class="col-25">
     <input type="text" id="mail" name="mail"  placeholder="Son adresse-mail de l'ECE..." >
      </div>
    </div>

     <div class="row">
      <input type="submit" value="Valider">
    </div>
  </form>
</div>

</body>
</html>