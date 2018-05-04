<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les experience de l'utilisateur dans les balises html de "modifier_utilisateur" */
function recupexpbis($num_u)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
		$sql = "SELECT* FROM experience WHERE Num_utilisateur='$num_u'";
		///REQUETE SQL recupere les experiences de l'utilisateur connecte
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
       
        $p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES = autre experience
     
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
            $tabexp[$p][0] = $row['Num_experience'];							 
			$tabexp[$p][1] = $row['Entreprise'];
			$tabexp[$p][2]= $row['Date_debut']; 
			$tabexp[$p][3] = $row['Date_fin']; 
			$tabexp[$p][4] = $row['Poste'];
            
			$p++; ///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTANT
			
			
            }
            
		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
      return $tabexp;  }
				

?>