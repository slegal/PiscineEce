<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les experiences de l'utilisateur */
function recupexp($num_u)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
   ////// LE TABLEAU RETOURNE
		$tabexpe = array();
		
		
		$sql = "SELECT* FROM experience WHERE Num_utilisateur = $num_u ";
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
		$tabexpe[] = $row['Entreprise'];
													}
													
		///AFFICHAGE
		foreach($tabexpe as $element)
		{
		echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
		}
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>