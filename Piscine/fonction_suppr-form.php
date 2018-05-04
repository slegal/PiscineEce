<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et l'ecole
suppr dans la BDD la liaison formation utilisateur*/
function supprform($num_u, $e)
{
	
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
		$sql = "INSERT INTO formation (Num_formation, Ecole, Diplome, Date_diplome, Description)
		VALUES('0','$ecole','$diplome','$date_diplome','$description_formation')"; 
		
		echo $sql;
		mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		//recuperation num_formation en recuperant la derniere ajoutee
		$req="SELECT* FROM formation ORDER BY Num_formation DESC LIMIT 1";
	
		$result = mysqli_query($db_handle, $req) or die(mysql_error())  ;
		while($data = mysqli_fetch_assoc($result))
		{$num_form=$data['Num_formation'];}
		
		//REQUETE SQL FORMATION SUIVIE (pourra etre faite par quelqu'un d'autre)
		$sql0="INSERT INTO formation_suivie (Num_utilisateur, Num_formation)
		VALUES('$num_u','$num_form')";
	
		echo $sql0;
		mysqli_query($db_handle, $sql0) or die(mysql_error())  ;
		
		
		
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>