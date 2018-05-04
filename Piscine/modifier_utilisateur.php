<?php session_start(); 
require 'fonction_recup-expbis.php'?>

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
<h1>Modifier le profil</h1>
<div class="introduction">
<p> Vous pouvez modifier les informations de votre profil sur cette page. Le Nom, le Prénom et l'Email ne sont modifiables que par un administrateur de l'ECE. Vous
pouvez également ajouter une expérience, une formatoin, une compétence et un centre d'interêt.</p>
</div>

<div class="container">
  <form action="traitement_modifier_utilisateur.php" method="post">
   <div class="row">
      <div class="col-25">
        <label for="fname">Pseudo</label>
      </div>
      <div class="col-75">
     <input type="text" id="pseudo" name="pseudo" value="<?php echo $_SESSION['Pseudo']?>" >
      </div>
    </div>
	
	
	 <div class="row">
      <div class="col-25">
        <label for="fname">Mot de Passe</label>
      </div>
      <div class="col-75">
     <input type="password" id="mdp" name="mdp" value="<?php echo $_SESSION['Mot_de_passe']?>" >
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label for="fname">Phrase d'introduction</label>
      </div>
      <div class="col-75">
     <input type="text" id="introduction" name="introduction" value="<?php echo $_SESSION['Phrase_d_intro']?>" >
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="subject">Description</label>
      </div>
      <div class="col-75">
        <textarea id="descrpition" name="description" value=""  style="height:200px"> <?php echo $_SESSION['Description']?></textarea>
      </div>
    </div>
  
	 <div class="row">
	    <div class="col-25">
	  <label for="input1">Experience  </label> <?php $tabexp=recupexpbis($_SESSION['Num_utilisateur']); ?>
	  	<img src="plus.png" width="30" height="30" alt"plus">
	  </div>
	  <div class="col-60">
       <input type="text" id="entreprise" name="entreprise" value="<?php echo $tabexp[sizeof($tabexp)-1][1] ?>" >
	  </div>
	<p>  Entreprise</p> 
 </div>
     <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="text" id="poste" name="poste"  value="<?php echo $tabexp[sizeof($tabexp)-1][4] ?>">
   </div>
   <p> Poste occupe</p>
      </div>
    <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="date" id="date debut" name="dD"  value="<?php echo $tabexp[sizeof($tabexp)-1][2] ?>">
   </div>
   <p> Date de début</p>
      </div>
	      <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="date" id="date fin" name="dF"  value="<?php echo $tabexp[sizeof($tabexp)-1][3] ?>">
	   </div>
	   <p> Date de fin</p>

</div>


	 <div class="row">
	    <div class="col-25">
	  <label for="input1">Formation </label>
	  	  	<img src="plus.png" width="30" height="30" alt"plus">
	  </div>
	  <div class="col-60">
       <input type="text" id="ecole" name="ecole" >
	  </div>
	<p>Ecole ou université</p>
 </div>
     <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="text" id="diplome" name="diplome" >
   </div>
   <p> Diplome obtenu</p>
      </div>
    <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="text" id="description_formation" name="description_formation">
   </div>
   <p> Description de la formation</p>
      </div>
	      <div class="row">
	<div class="col-25">
	</div>
       <div class="col-60">
       <input type="date" id="date_diplome" name="date_diplome" >
	   </div>
	   <p> Date de l'obtention du diplome</p>
</div>


 <div class="row">
	    <div class="col-25">
	  <label for="input1">Compétences </label>
	  	  	<img src="plus.png" width="30" height="30" alt"plus">
	  </div>
	  <div class="col-75">
       <input type="text" id="competence" name="description_competence">
	  </div>

 </div>
 
 
  <div class="row">
	    <div class="col-25">
	  <label for="input1">Centres d'interet </label>
	  	  	<img src="plus.png" width="30" height="30" alt"plus">
	  </div>
	  <div class="col-75">
       <input type="text" id="centre_interet" name="description_interet" >
	  </div>

 </div>
 
 
 
     <div class="row">
      <input type="submit" value="Valider">
    </div>
  </form>
</div>

</body>
</html>