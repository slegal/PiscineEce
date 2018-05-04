<?php


function fonction_recup_eux($nom,$prenom){
	
$database='linkece';
$db_handle=mysqli_connect('localhost', 'root','');
$db_found=mysqli_select_db($db_handle,$database);


		

    if($db_found) {
		
        $sql = "SELECT* FROM utilisateur ";
        $result = mysqli_query($db_handle, $sql);
			header('Location: Eux.php');
        while($data = mysqli_fetch_assoc($result)) {
	
		//avec des variables session on recupere les info de la personne connectee
		if(($data['Nom']==$nom) && ($data['Prenom']==$prenom))
		{
						
			$_SESSION['Num_utilisateur1']=$data['Num_utilisateur'];
			$_SESSION['Nom1']=$data['Nom'];
			$_SESSION['Prenom1']=$data['Prenom'];
			$_SESSION['Mot_de_passe1']=$data['Mot_de_passe'];
			$_SESSION['Adresse_email1']=$data['Adresse_email'];
			$_SESSION['Pseudo1']=$data['Pseudo'];
			$_SESSION['Lien_photo_profil1']=$data['Lien_photo_profil'];
			$_SESSION['Lien_photo_couverture1']=$data['Lien_photo_couverture'];
			$_SESSION['Description1']=$data['Description'];
			$_SESSION['Phrase_d_intro1']=$data['Phrase_d_intro'];
            $_SESSION['Type_user1']=$data['Type_user'];
			
		}

        }
       
    }
    else { echo "Base de données non trouvée."; }

mysqli_close($db_handle);
}
?>