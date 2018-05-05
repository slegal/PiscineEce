<?php

/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et l'ecole
suppr dans la BDD la liaison formation utilisateur*/
function supprcomp($num_u, $d)
{
	
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
		$sql = "SELECT* FROM competence WHERE Description='$d'";
				
	
		
		$result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		while($data = mysqli_fetch_assoc($result))
		{$num_c=$data['Num_competence'];}
	
	//REQUETE SQL COMPETENCE SUIVIE 	
	$sql0="DELETE FROM competence_suivie WHERE Num_utilisateur='$num_u' AND Num_competence='$num_c'";
	
		
		mysqli_query($db_handle, $sql0) or die(mysql_error())  ;
				
   //REQUETE SQL COMPETENCE (si il est le seul utilisateur à la suvre)
   
			$req="SELECT* FROM competence WHERE Num_competence ='$num_c'";
			 mysqli_query($db_handle, $req) or die(mysql_error())  ;
			

			 $p=0;
			 foreach  ($db_handle->query($req) as $row) { $p++;}
			 
			 if($p<=1)
			 {
				
				 $sqlb="DELETE FROM competence WHERE Num_formation='$num_c'";
				  mysqli_query($db_handle, $sqlb) or die(mysql_error())  ;
			 }
			 
			         
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
		
		header('Location: Vous.php');
				

?>


