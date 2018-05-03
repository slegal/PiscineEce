<?php
/* Ci-dessous, la fonction qui prend en parametre num_utilisateur et 
le champ description génère la requete sql pour l'ajouter*/
				
function ajoutcomp($num_u,$description_competence)
{
	
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {	
	
		
		//REQUETE SQL COMPETENCE
				
		$sql = "INSERT INTO competence (Num_competence, Description)
		VALUES('0','$description_competence')"; 
		
		echo $sql;
		mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		//recuperation num_competence en recuperant la derniere ajoutee
		$req="SELECT* FROM competence ORDER BY Num_competence DESC LIMIT 1";
	
		$result = mysqli_query($db_handle, $req) or die(mysql_error())  ;
		while($data = mysqli_fetch_assoc($result))
		{$num_comp=$data['Num_competence'];}
		
		//REQUETE SQL COMPETENCE SUIVIE (pourra etre maitrisee par quelqu'un d'autre)
		$sql0="INSERT INTO competence_suivie (Num_competence, Num_utilisateur)
		VALUES('$num_comp','$num_u')";
	
		echo $sql0;
		mysqli_query($db_handle, $sql0) or die(mysql_error())  ;
		
		
		
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>
