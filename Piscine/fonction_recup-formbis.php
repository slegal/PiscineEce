

<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_formation
Affiche la description qui correspond */
function recupformbis($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		$tab=array();
			
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num_i=$arr[$i];		
			$sql = "SELECT* FROM formation WHERE Num_formation=$num_i "; 
			$result=mysqli_query($db_handle, $sql) or die(mysql_error())  ;
			while($data = mysqli_fetch_assoc($result)) {
	
			$tab[$i]= $data['Ecole']; 
			
			}
		}
			
		}  
			  
	
    else { echo "Base de données non trouvée."; }
			
			mysqli_close($db_handle);
	
		return $tab;
			
}

				

?>

<?php
/*Ci-dessous, la fonction qui prend en parametre un tableau de Num_formation
Affiche la description qui correspond 
function recupformbis($arr)
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
			$tab[$p][0] = $row['Num_formation']; 
			$tab[$p][1] = $row['Ecole']; 
			$tab[$p][2] = $row['Diplome'];
			$tab[$p][3] = $row['Date_diplome'];
			$tab[$p][4] = $row['Description'];
			
			$p++;
			}
		
		}
		for ($i = 0; $i <sizeof($tab);$i++)
		{
			echo $tab[$i][1];
		}
				
			
		}  
	 
    else { echo "Base de données non trouvée."; }
			
			mysqli_close($db_handle);
	
	return $tab	;
			
}
/*
<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_formation
renvoie le tableau  
function recupform($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
			
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num=$arr[$i];		
			$sql = "SELECT* FROM formation WHERE Num_formation='$num' "; 
			
			$p=0;
			
				///REMPLISSAGE
			foreach  ($db_handle->query($sql) as $row) {
			$tab[$p][] = $row['Ecole']; ///LIGNE A L INDICE $P , LA PREMIERE COLONNE = Ecole
			$tab[$p][] = $row['Diplome']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE DEBUT
			$tab[$p][] = $row['Date_diplome'];
			$tab[$p][] = $row['Description'];
			
			$p++;
			//echo $a;
			$tab[$i] = $a; ///TABLEAU AYANT AUTANT DE LIGNE ET CONTENANT LES LES PHRASES A AFFICHER
			echo $tabstring[$i] ;
			///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTAN
			}
			
			
		}  
			  
		} 
    else { echo "Base de données non trouvée."; }
			
			mysqli_close($db_handle);
	
		
			
}

				

?>

				

?>


/*function recupform($arr)
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

				
*/
?>