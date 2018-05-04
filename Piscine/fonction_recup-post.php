<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les emploi de l'utilisateur */
function recuppost()
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
		$tabemploi=array();
    if($db_found) {
		

		
		
		
		$sql = "SELECT* FROM post"; ///REQUETE SQL POUR AVOIR LA TABLE EMPLOI
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
        


        $p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
     
		
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
			            $tabemploi[$p][1] = $row['Num_post'];
            $tabemploi[$p][1] = $row['Num_utilisateur'];
		
			$tabemploi[$p][2] = $row['Nombre_de_like']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE CREATION
            $tabemploi[$p][3] = $row['Nombre_de_comment'];
			$tabemploi[$p][4] = $row['Contenu']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE CREATION
            $tabemploi[$p][5] = $row['Lieu'];
			   $tabemploi[$p][6] = $row['Emotion'];
			$tabemploi[$p][7] = $row['Confidentialite']; ///LIGNE A L INDICE $P , LA DEUXIEME COLONNE = DATE CREATION
            $tabemploi[$p][8] = $row['Type_contenu'];
            

            ////DEUXIEMEBOUCLE
            $tmpNom=$row['Num_utilisateur'];

            $sql2 = "SELECT * FROM utilisateur WHERE Num_utilisateur=$tmpNom"; ///REQUETE SQL POUR AVOIR LE NOM EN PASSANT PAR EMPLOI
            $result = mysqli_query($db_handle, $sql2) or die(mysql_error())  ;

            foreach  ($db_handle->query($sql2) as $row) {

                $tabemploi[$p][9] = $row['Nom']; ///LA 4eme CASE DU TABLEAU CONTIENT LE NOm
                $tabemploi[$p][10] = $row['Prenom']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
              

            }

            		
			
		
			$p++; ///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTANT
			
			
			
            }
            
                    
            
/*     
///AFFICHAGE 2D
//Boucle d'affichage
for ($i = 0; $i < sizeof($tabemploi);$i++)
{
	?></br><?php
for ($g = 0; $g <sizeof($tabemploi[$i]);$g++)
{
echo $tabemploi[$i][$g];


}
}
*/

		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
      return $tabemploi;  }
				

?>