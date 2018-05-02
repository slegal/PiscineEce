<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
renvoie dans un tableau les Num_Competence qui correspondent à celles qu'il a */
function recupcompsuivie($num_u)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
   ////// LE TABLEAU RETOURNE
		$tabnum = array();		
		
		$sql = "SELECT* FROM competence_suivie WHERE Num_utilisateur = $num_u ";
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
		$tabnum[] = $row['Num_competence'];
													}
													
		///AFFICHAGE
		foreach($tabnum as $element)
		{
		echo $element . '<br />'; // affichera les num_comp
		}
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
	return $tabnum;
		
			
        }
				

?>