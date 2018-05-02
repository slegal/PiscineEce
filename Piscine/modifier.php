
<?php session_start(); ?>
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
<h1>Modifier le profil</h1>
<div class="introduction">
<p> Vous pouvez modifier les informations de votre profil sur cette page. Le Nom, le Prénom et l'Email ne sont modifiable que par un administrateur de l'ECE.</p>
</div>

<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Phrase d'introduction</label>
      </div>
      <div class="col-75">
        <input type="text" id="introduction" name="firstname" value=<?php $_SESSION['Phrase_d_intro']?> >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>