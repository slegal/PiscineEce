<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_formation
Affiche la description qui correspond */
function recupform($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
			
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num_i=$arr[$i];		
			$sql = "SELECT* FROM formation WHERE Num_formation=$num_i "; 
			
			$p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
		
				///REMPLISSAGE
			foreach  ($db_handle->query($sql) as $row) {
			$tab[$p][0] = $row['Ecole']; 
			$tab[$p][1] = $row['Ecole']; 
			$tab[$p][2] = $row['Diplome'];
			$tab[$p][3] = $row['Date_diplome'];
			$tab[$p][4] = $row['Description'];
			
			$p++;
			}
		
		}
				
			
		}  
	 
    else { echo "Base de données non trouvée."; }
			
			mysqli_close($db_handle);
	
	return $tab	;
			
}

				

?>