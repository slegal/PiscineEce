<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les experiences de l'utilisateur */
function recupexp($num_u)
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
$tabstringexpe=array();
		
		
		
		$sql = "SELECT* FROM experience WHERE Num_utilisateur = $num_u "; ///REQUETE SQL
		$result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
		$p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
		
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
			$tabexpe[$p][] = $row['Entreprise']; ///LIGNE A L INDICE $P , LA PREMIERE COLONNE = ENTREPRISE
			$a ="A travaille dans l'entreprise "; ///$a EST LA CHAINE DE CARACTERE
			$a .= $row['Entreprise']; ///ON CONCATENE
			$tabexpe[$p][] = $row['Date_debut']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE DEBUT
			$a .=" depuis le ";
			$a .= $row['Date_debut'];
			$tabexpe[$p][] = $row['Date_fin'];
			$a .=" jusqu'au ";
			$a .= $row['Date_fin'];
			$tabexpe[$p][] = $row['Poste'];
			$a .=" au poste de ";
			$a .= $row['Poste'];
			
			//echo $a;
			$tabstringexpe[$p] = $a; ///TABLEAU AYANT AUTANT DE LIGNE ET CONTENANT LES LES PHRASES A AFFICHER
			$p++; ///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTAN
			}
			?>
			<ul> 
<?php			
		///AFFICHAGE
		for ($g = 0; $g <sizeof($tabstringexpe);$g++)
		{?>
	
	<li><?php	echo $tabstringexpe[$g];?></li>
		<?php
		}
		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        }
				

?>