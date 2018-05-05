<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_competence
Affiche la description qui correspond */
function recupcomp($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
	
			$tab=array();
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num_c=$arr[$i];		
			$sql = "SELECT* FROM competence WHERE Num_competence=$num_c "; 
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			
			  echo $data['Description'];
				?> <br> <?php
				$tab[$i]=$data['Description'];
			 
		}  
			  
		}
		
		

	mysqli_close($db_handle);
	
	return $tab;	
			
}

				

?>