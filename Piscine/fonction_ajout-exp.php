<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et un tableau des données à ajouter 
ajoute dans la BDD l'experience de l'utilisateur */
function ajoutexp($num_u, $arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {	
	
		//recuperation des données : on suppose que tout est rempli
		$entreprise=$arr[0];
		$dD=$arr[1];
		$dF=$arr[2];
		$poste=$arr[3];
		//requete SQL
		$sql = "INSERT INTO experience (Num_experience, Num_utilisateur, Entreprise, Date_debut, Date_fin, Poste)
		VALUES('0','$num_u','$entreprise','$dD','$dF','$poste')"; 
		
		echo $sql;
		$result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>