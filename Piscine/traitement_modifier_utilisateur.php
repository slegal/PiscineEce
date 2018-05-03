<?php session_start();
require 'fonction_ajout-exp.php';

//recuperation de l'utilisateur actuel
 $num_u=$_SESSION["Num_utilisateur"]; 

//recuperation des champs de la premiere partie : SI REMPLIS ...a terminer
			/*if (isset($_POST['pseudo']){$pseudo=$_POST["pseudo"]}
			else{echo 'Veuillez remplir le champ pseudo ';}*/
			


	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', 'p21');
	$db_found=mysqli_select_db($db_handle,$database);
 
  
if($db_found) {
    
    $sql =  "UPDATE utilisateur SET Pseudo ='".$_POST["pseudo"]."', Mot_de_passe='".$_POST["mdp"]."', Description ='".$_POST["description"]."', Phrase_d_intro ='".$_POST["introduction"]."' WHERE Num_utilisateur ='$num_u' ";
    
   echo $sql;
    
    $result = mysqli_query($db_handle, $sql);  
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);
	
	
//recuperation des champs de la partie experience : SI REMPLIS 
			if ((isset($_POST['entreprise']))&&(isset($_POST['poste']))&&(isset($_POST['dD']))&&(isset($_POST['dF'])))
			{
				$arr=array();
				$arr[0]=$_POST["entreprise"];
				$arr[1]=$_POST["dD"];
				$arr[2]=$_POST["dF"];
				$arr[3]=$_POST["poste"];				
				
				ajoutexp($num_u,$arr);
				
				
			}
			else{echo 'Veuillez remplir tous les champs pour ajouter une experience  ';}	

?>