<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
renvoie dans un tableau les Num_interet qui correspondent à ceux qu'il a */
function recupinteretsuivi($num_u)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
   ////// LE TABLEAU RETOURNE
		$tabnum = array();		
		
		$sql = "SELECT* FROM interet_suivi WHERE Num_utilisateur = $num_u ";
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
		$tabnum[] = $row['Num_interet'];
													}
													
		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
	return $tabnum;
		
			
        }
				

?>