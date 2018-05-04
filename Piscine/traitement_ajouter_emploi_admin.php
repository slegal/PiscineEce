<?php session_start();

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);

  
if($db_found) {
    
    $sql =  "INSERT INTO emploi (Num_emploi, Num_utilisateur, Description, Date_creation, Titre) 
 VALUES('0',".$_SESSION['Num_utilisateur'].",'".$_POST["description_offre"]."',NOW(),'".$_POST["intitule_offre"]."')";
    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
		header('Location: Emplois_admin.php');
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
?>