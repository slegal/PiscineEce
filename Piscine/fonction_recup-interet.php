<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_interet
Affiche la description qui correspond */
function recupinteret($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
	
			
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num_i=$arr[$i];		
			$sql = "SELECT* FROM centre_d_interet WHERE Num_interet=$num_i "; 
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			
			  echo $data['Description'];
				?> <br> <?php
			 
		}  
			  
		}
		
		

	mysqli_close($db_handle);
	
		
			
}

				

?>