<?php 

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  " DELETE FROM utilisateur WHERE Num_utilisateur = ".$_POST["personne"]."";

    $sql2 =  " DELETE FROM contact WHERE Num_utilisateur = ".$_POST["personne"]."";

    $sql3 =  " DELETE FROM contact WHERE Num_ami = ".$_POST["personne"]."";
    
    $sql4="INSERT INTO `post` (`Num_post`, `Num_utilisateur`, `Nombre_de_like`, `Nombre_de_comment`, `Contenu`, `Lieu`, `Emotion`, `Confidentialite`, `Type_contenu`) VALUES ('1', '5', '5', '5', '5', '5', '5', '5', 'video')";
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    $result = mysqli_query($db_handle, $sql2);  
    $result = mysqli_query($db_handle, $sql3);  
    $result = mysqli_query($db_handle, $sql4); 
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>