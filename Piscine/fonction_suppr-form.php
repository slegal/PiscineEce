<?php

/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et l'ecole
suppr dans la BDD la liaison formation utilisateur*/
function supprform($num_u, $e)
{
	
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
		$sql = "SELECT* FROM formation WHERE Ecole='$e'";
				
		echo $sql;	

		
		$result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		while($data = mysqli_fetch_assoc($result))
		{$num_f=$data['Num_formation'];}
	
	//REQUETE SQL FORMATION SUIVIE 	
	$sql0="DELETE FROM formation_suivie WHERE Num_utilisateur='$num_u' AND Num_formation='$num_f'";
	
		echo $sql0;
		mysqli_query($db_handle, $sql0) or die(mysql_error())  ;
				
   //REQUETE SQL FORMATION (si il est le seul utilisateur à la suvre)
   
			$req="SELECT* FROM formation WHERE Num_formation ='$num_f'";
			 mysqli_query($db_handle, $req) or die(mysql_error())  ;
			 echo $req;

			 $p=0;
			 foreach  ($db_handle->query($req) as $row) { $p++;}
			 
			 if($p<=1)
			 {
				
				 $sqlb="DELETE FROM formation WHERE Num_formation='$num_f'";
				  mysqli_query($db_handle, $sqlb) or die(mysql_error())  ;
			 }
			 
			         
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>


