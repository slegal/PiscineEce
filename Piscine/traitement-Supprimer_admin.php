<?php 

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  " DELETE FROM utilisateur WHERE Num_utilisateur = ".$_POST["personne"]."";

    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>