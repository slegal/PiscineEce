<?php session_start();
require 'fonction_ajout-exp.php';
require 'fonction_ajout-form.php';
require 'fonction_ajout-comp.php';
require 'fonction_ajout-interet.php';
require 'fonction_suppr-expe.php';



//recuperation de l'utilisateur actuel
 $num_u=$_SESSION["Num_utilisateur2"]; 

///AJOUT INFO PERSO
//recuperation des champs de la premiere partie : SI REMPLIS ...a terminer
			if ((isset($_POST['pseudo']))&&(($_POST['pseudo'])!='')){$pseudo=$_POST["pseudo"];}
			if ((isset($_POST['mdp']))&&(($_POST['mdp'])!='')){$mdp=$_POST["mdp"];}
			if ((isset($_POST['introduction']))&&(($_POST['introduction'])!='')){$intro=$_POST['introduction'];}
			if ((isset($_POST['description']))&&(($_POST['description'])!='')){$descri=$_POST["description"];}

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);


	    ////////// VU SUR OPENCLASSROOM
		$nom_fichier=basename($_FILES['monfichier']['name']);

		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
				 // Testons si le fichier n'est pas trop gros
				 if ($_FILES['monfichier']['size'] <= 1000000)
				 {
					// Testons si l'extension est autorisée
					$infosfichier = pathinfo($_FILES['monfichier']['name']);
					$extension_upload = $infosfichier['extension'];
					$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png','PNG','JPG','MP4','mp4');
			
				 }
		}
 
  
if($db_found) {
    
    $sql =  "UPDATE utilisateur SET Pseudo ='$pseudo', Mot_de_passe='$mdp', Description ='$descri', Phrase_d_intro ='$intro', Lien_photo_profil ='$nom_fichier' WHERE Num_utilisateur ='$num_u' ";
    
      
    $result = mysqli_query($db_handle, $sql);  
    }
    
    else { echo "Base de données non trouvée."; }
    mysqli_close($db_handle);

	
///AJOUT EXPERIENCE 
//recuperation des champs de la partie experience : SI REMPLIS 
			if ((isset($_POST['entreprise']))&&(isset($_POST['poste']))&&(isset($_POST['dD']))&&(isset($_POST['dF'])))
			{if ((($_POST['entreprise'])!='')&&(($_POST['poste'])!='')&&(($_POST['dD'])!='')&&(isset($_POST['dF']))!='')
			{
				$arr=array();
				$arr[0]=$_POST["entreprise"];
				$arr[1]=$_POST["dD"];
				$arr[2]=$_POST["dF"];
				$arr[3]=$_POST["poste"];
				
			/*la fonction qui prend en parametre num_utilisateur et un tableau des champs remplis
			et génère la requete sql*/
				ajoutexp($num_u,$arr);
				
			}	
			}
			else{echo 'Veuillez remplir tous les champs pour ajouter une experience  ';}	
			
				if ((isset($_POST['exp-suppr']))&&(($_POST['exp-suppr'])!='aucune')&&(($_POST['exp-suppr'])!=''))
			{
				$ent=$_POST["exp-suppr"];
				supprexp($num_u,$ent);
			}
			
///AJOUT FORMATION
//recuperation des champs de la partie formation : SI REMPLIS 
			if ((isset($_POST['ecole']))&&(isset($_POST['diplome']))&&(isset($_POST['description_formation']))&&(isset($_POST['date_diplome'])))
			{if ((($_POST['ecole'])!='')&&(($_POST['diplome'])!='')&&(($_POST['description_formation'])!='')&&(isset($_POST['date_diplome']))!='')
			{
				
				$arr=array();
				$arr[0]=$_POST["ecole"];
				$arr[1]=$_POST["diplome"];
				$arr[2]=$_POST["description_formation"];
				$arr[3]=$_POST["date_diplome"];
				
			/*la fonction qui prend en parametre num_utilisateur et un tableau des champs remplis
			et génère la requete sql*/
				ajoutform($num_u,$arr);
				
			}	
			}
			else{echo 'Veuillez remplir tous les champs pour ajouter une experience  ';}	
			
				if ((isset($_POST['form-suppr']))&&(($_POST['form-suppr'])!='aucune')&&(($_POST['form-suppr-suppr'])!=''))
			{
				$ecole=$_POST["form-suppr"];
				supprexp($num_u,$ecole);
			}
			
			
///AJOUT COMPETENCE
//recuperation du champ de la partie competence : SI REMPLI 

			if (isset($_POST['description_competence']))
			{if ((($_POST['description_competence'])!=''))
			{
				$description_competence=$_POST["description_competence"];
				/*la fonction qui prend en parametre num_utilisateur et le champ description rempli
				et génère la requete sql pour l'ajouter dans les tables requises*/
				ajoutcomp($num_u,$description_competence);
			}}

///AJOUT INTERET
//recuperation du champ de la partie interet : SI REMPLI 

			if (isset($_POST['description_interet']))
			{if ((($_POST['description_interet'])!=''))
			{
				$description_interet=$_POST["description_interet"];
				/*la fonction qui prend en parametre num_utilisateur et le champ description rempli
				et génère la requete sql pour l'ajouter dans les tables requises*/
				ajoutinteret($num_u,$description_interet);
			}}
			
		
			
			
?>