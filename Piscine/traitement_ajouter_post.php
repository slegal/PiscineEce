<?php session_start();

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);

  
if($db_found) {
	

    $sql="INSERT INTO post (Num_post, Num_utilisateur, Nombre_de_like, Nombre_de_comment, Contenu, Lieu, Emotion, Confidentialite, Type_contenu) 
	VALUES ('0', ".$_SESSION['Num_utilisateur'].", '0', '0', '".$_POST["subject"]."', '".$_POST["location"]."','".$_POST["emotion"]."', '0', '".$_POST["type"]."')";


   echo $sql;
    
    $result = mysqli_query($db_handle, $sql) or die(mysql_error());  
		header('Location: Accueil.php');
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>