<?php 

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  "INSERT INTO utilisateur (Num_utilisateur, Nom, Prenom, Mot_de_passe, Adresse_email, Pseudo, Lien_photo_couverture, Description, Phrase_d_intro, Type_user) 
 VALUES('0','".$_POST["nom"]."','".$_POST["prenom"]."','0','".$_POST["mail"]."','0','0','0','0','0')";
    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>