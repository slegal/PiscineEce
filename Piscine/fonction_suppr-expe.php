<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et Num_experience
Delete dans la BDD l'experience de l'utilisateur */
function supprexp($num_u, $e)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {	
	
		
		$sql = "DELETE FROM experience WHERE Num_utilisateur='$num_u' AND Entreprise='$e'"; 
		
		echo $sql;
		$result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>