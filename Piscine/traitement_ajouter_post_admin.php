<?php session_start();

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
    $db_found=mysqli_select_db($db_handle,$database);
    
    $nom_fichier=basename($_FILES['monfichier']['name']);

    if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
    {
             // Testons si le fichier n'est pas trop gros
             if ($_FILES['monfichier']['size'] <= 1000000)
             {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','PNG','JPG','MP4','mp4');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                    echo "L'envoi a bien été effectué !";
                }
             }
    }

if($db_found) {
	

    $sql="INSERT INTO post (Num_post, Num_utilisateur, Nombre_de_like, Nombre_de_comment, Contenu, Lieu, Emotion, Confidentialite, Type_contenu) 
    VALUES ('0', ".$_SESSION['Num_utilisateur'].", '0', '0', '".$_POST["subject"]."', '".$_POST["location"]."','".$_POST["emotion"]."', '0', '".$_POST["type"]."')";
    
if($_POST['type']=="photo"){ ///SI TYPE PHOTO ON MET LE NOM DU FICHIER
    $sql="INSERT INTO post (Num_post, Num_utilisateur, Nombre_de_like, Nombre_de_comment, Contenu, Lieu, Emotion, Confidentialite, Type_contenu) 
    VALUES ('0', ".$_SESSION['Num_utilisateur'].", '0', '0', 'Images/$nom_fichier', '".$_POST["location"]."','".$_POST["emotion"]."', '0', '".$_POST["type"]."')";
}

if($_POST['type']=="video"){ ///SI TYPE PHOTO ON MET LE NOM DU FICHIER
    $sql="INSERT INTO post (Num_post, Num_utilisateur, Nombre_de_like, Nombre_de_comment, Contenu, Lieu, Emotion, Confidentialite, Type_contenu) 
    VALUES ('0', ".$_SESSION['Num_utilisateur'].", '0', '0', 'Videos/$nom_fichier', '".$_POST["location"]."','".$_POST["emotion"]."', '0', '".$_POST["type"]."')";
}

  

   echo $sql;
    
   $result = mysqli_query($db_handle, $sql) or die(mysql_error());  
		header('Location: Accueil_admin.php');
		echo $sql;
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>