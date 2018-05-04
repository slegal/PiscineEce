<?php
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les emploi de l'utilisateur */

function recuppersonne()
{
	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
    $db_found=mysqli_select_db($db_handle,$database);
    
    $data=$_SESSION['Num_utilisateur'];
	
    if($db_found) {
		

		$tabfinal=array();
		$tabpersonne=array();
		$tabami=array();
		
		$sql = "SELECT* FROM contact WHERE Num_utilisateur != $data AND Num_ami != $data "; ///REQUETE SQL POUR AVOIR LA TABLE EMPLOI OU YA PAS LA PERSONNE CONNECTE
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
        
        		
		$sql3 = "SELECT* FROM contact WHERE Num_utilisateur= $data"; ///REQUETE SQL POUR AVOIR LA TABLE EMPLOI
        $result = mysqli_query($db_handle, $sql3) or die(mysql_error())  ;


        $p=0; ///VALEUR PERMETTANT D INCREMENTER LES LIGNES
        $taille=0;
        $ok=0;
        $stop=0;
      
        foreach  ($db_handle->query($sql) as $row) {



                $tabpersonne[$taille][0] = $row['Num_utilisateur'];
                $tabpersonne[$taille][6] = $row['Num_ami'];
                $taille++;


            }

                         

            foreach  ($db_handle->query($sql3) as $row) {

                $tabami[$p][0] = $row['Num_ami'];
                $p++;

            }

            for ($i = 0; $i < sizeof($tabpersonne);$i++) 
            {
                $stop=0;
                for ($g = 0; $g < sizeof($tabami);$g++)
                {
                    if($tabpersonne[$i][0]== $tabami[$g][0]&& $stop!=1)
                    {
                       // $tabfinal[]=$tabpersonne[$i][0];
                       $stop=1;///SI EXISTE DANS AMIS ALORS ON STOP
                    }
                    
                }

                if($stop!=1) ///SIP AS STOP ALORS ON PUSH
                {
                    $tabfinal[$ok][0]=$tabpersonne[$i][0];
                    
             ////DEUXIEMEBOUCLE
            $tmpNom=$tabfinal[$ok][0];

            $sql2 = "SELECT * FROM utilisateur WHERE Num_utilisateur=$tmpNom"; ///REQUETE SQL POUR AVOIR LE NOM EN PASSANT PAR EMPLOI
            $result = mysqli_query($db_handle, $sql2) or die(mysql_error())  ;

            foreach  ($db_handle->query($sql2) as $row) {

                $tabfinal[$ok][1] = $row['Nom']; ///LA 4eme CASE DU TABLEAU CONTIENT LE NOm
                $tabfinal[$ok][2] = $row['Prenom']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
                $tabfinal[$ok][3] = $row['Lien_photo_profil']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
                $tabfinal[$ok][4] = $row['Num_utilisateur']; ///LA 5 CASE DU TABLEAU CONTIENT LE PRENOM
              
                $ok ++;

            }
                }
                
            }

              



            
    


		/*
		///REMPLISSAGE
		foreach  ($db_handle->query($sql) as $row) {
            $ok=1;

            $tabamitmp2[1] = $row['Num_utilisateur']; ///TABLEAU INVERSE DE CELUI VOULU
            $tabamitmp2[0] = $row['Num_ami'];

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
                    
            
 /*  
///AFFICHAGE 2D
//Boucle d'affichage
for ($i = 0; $i < sizeof($tabpersonne);$i++)
{
	?></br><?php

echo $tabpersonne[$i][0];

echo $tabpersonne[$i][6];


}

for ($i = 0; $i < sizeof($tabami);$i++)
{
	?></br><?php
echo "tabami";
echo $tabami[$i][0];

}


for ($i = 0; $i < sizeof($tabfinal);$i++)
{
	?></br><?php
echo "tabfinal";
echo $tabfinal[$i][1];

}
*/


		
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
  return $tabfinal; }
				

?>