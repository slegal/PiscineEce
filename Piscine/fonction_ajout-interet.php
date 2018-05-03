<?php
/* Ci-dessous, la fonction qui prend en parametre num_utilisateur et 
le champ description et génère la requete sql pour l'ajouter*/
				
function ajoutinteret($num_u,$description_interet)
{
	
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {	
	
		
		//REQUETE SQL INTERET
				
		$sql = "INSERT INTO centre_d_interet (Num_interet, Description)
		VALUES('0','$description_interet')"; 
		
		echo $sql;
		mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		//recuperation num_interet en recuperant le dernier ajoute
		$req="SELECT* FROM centre_d_interet ORDER BY Num_interet DESC LIMIT 1";
	
		$result = mysqli_query($db_handle, $req) or die(mysql_error())  ;
		while($data = mysqli_fetch_assoc($result))
		{$num_interet=$data['Num_interet'];}
		
		//REQUETE SQL INTERET SUIVI (pourra etre aussi celui de quelqu'un d'autre)
		$sql0="INSERT INTO interet_suivi (Num_interet, Num_utilisateur)
		VALUES('$num_interet','$num_u')";
	
		echo $sql0;
		mysqli_query($db_handle, $sql0) or die(mysql_error())  ;
		
		
		
		}
		
		
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>
