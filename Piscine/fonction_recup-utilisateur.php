<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les emploi de l'utilisateur */


function recuputilisateur()
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
    $db_found=mysqli_select_db($db_handle,$database);
    
    $data=$_SESSION['Num_utilisateur'];
	
    if($db_found) {
		

		
		
		
		$sql = "SELECT* FROM utilisateur";///REQUETE SQL POUR AVOIR LA TABLE EMPLOI
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
        


        $p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
        $taille=0;
      
        foreach  ($db_handle->query($sql) as $row) {

                $tabutilisateur[$taille][0] = $row['Num_utilisateur'];
         
              


             ////DEUXIEMEBOUCLE
            $tmpNom=$row['Num_utilisateur'];

            $sql2 = "SELECT * FROM utilisateur WHERE Num_utilisateur=$tmpNom"; ///REQUETE SQL POUR AVOIR LE NOM EN PASSANT PAR EMPLOI
            $result = mysqli_query($db_handle, $sql2) or die(mysql_error())  ;

            foreach  ($db_handle->query($sql2) as $row) {

                $tabutilisateur[$taille][1] = $row['Nom']; ///LA 4eme CASE DU TABLEAU CONTIENT LE NOm
                $tabutilisateur[$taille][2] = $row['Prenom']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
                

              
                $taille ++;

            }
        }


		/*
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
            $ok=1;

            $tabutilisateurtmp2[1] = $row['Num_utilisateur']; ///TABLEAU INVERSE DE CELUI VOULU
            $tabatmp2[0] = $row['Num_ami'];

            if($p==0) /// SERT A PUSH QUAND TABLEAU VIDE
            {
                $tabami[0][0]=$row['Num_utilisateur'];
                $tabami[0][1]=$row['Num_ami'];
                $taille ++;
            }
            


            for ($i = 0; $i < sizeof($taille);$i++) ///ON PARCOURT LE TABLEAU VOULU ET ON S ASSURE QUE L INVERSE N EXISTE PAS
            {   
                        if($tabamitmp2[0]==$tabami[$i][0] && $tabamitmp2[1]==$tabami[$i][1])
                        {
                                $ok=0;
                        }
                        


                    
            }

            if($ok==1) ///ON PEUT PUSH CAR PAS DE DOUBLON
            {
                $tabami[$taille][0] = $row['Num_utilisateur'];
                $tabami[$taille][1] = $row['Num_ami']; 
                $taille ++;
            }
            
			$p++; ///UNE FOIS LA LIGNE FINIE ON PASSE A LA LIGNE SUIVANTE EN INCREMENTANT
			
			
            }
            */
                    
            
     
///AFFICHAGE 2D
//Boucle d'affichage
for ($i = 0; $i < $taille;$i++)
{
	?></br><?php

echo $tabutilisateur[$i][0];
echo $tabutilisateur[$i][1];
echo $tabutilisateur[$i][2];

}


		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
      return $tabutilisateur;  }
				

?>