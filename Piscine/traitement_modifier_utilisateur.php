<?php session_start();

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  "UPDATE utilisateur SET Description ='".$_POST["description"]."', Phrase_d_intro ='".$_POST["introduction"]."' WHERE Num_utilisateur ='".$_SESSION["Num_utilisateur"]."' ";
    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>