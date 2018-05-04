<?php 

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  " DELETE FROM utilisateur WHERE Num_utilisateur = ".$_POST["personne"]."";

    $sql2 =  " DELETE FROM contact WHERE Num_utilisateur = ".$_POST["personne"]."";

    $sql3 =  " DELETE FROM contact WHERE Num_ami = ".$_POST["personne"]."";
    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    $result = mysqli_query($db_handle, $sql2);  
    $result = mysqli_query($db_handle, $sql3);  
    
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>