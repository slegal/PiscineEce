<?php
/* Ci-dessous, la fonction qui prend en parametre un tableau de Num_formation
Affiche la description qui correspond */
function recupform($arr)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
		
			
		for ($i = 0; $i <sizeof($arr);$i++)
		{
			$num_i=$arr[$i];		
			$sql = "SELECT* FROM formation WHERE Num_formation=$num_i "; 
			
			$p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
		
				///REMPLISSAGE
			foreach  ($db_handle->query($sql) as $row) {
			$tab[$p][] = $row['Ecole']; ///LIGNE A L INDICE $P , LA PREMIERE COLONNE = Ecole
			$a ="A etudie dans l'ecole: "; ///$a EST LA CHAINE DE CARACTERE
			$a .= $row['Ecole']; ///ON CONCATENE
			$tab[$p][] = $row['Diplome']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE DEBUT
			$a .=" a obtenu le diplome: ";
			$a .= $row['Diplome'];
			$tab[$p][] = $row['Date_diplome'];
			$a .=" a la date ";
			$a .= $row['Date_diplome'];
			$tab[$p][] = $row['Description'];
			$a .=" dans le cadre de la formation: ";
			$a .= $row['Description'];
			
			//echo $a;
			$tabstring[$i] = $a; ///TABLEAU AYANT AUTANT DE LIGNE ET CONTENANT LES LES PHRASES A AFFICHER

			echo $tabstring[$i];
			

			
			$p++; ///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTAN
			}
			?><ul> <?php			
			///AFFICHAGE
		
				
			
		}  
			  
		} 
    else { echo "Base de données non trouvée."; }
			
			mysqli_close($db_handle);
	
		
			
}

				

?>