<?php

session_start();

$database='linkece';
$db_handle=mysqli_connect('localhost', 'root','');
$db_found=mysqli_select_db($db_handle,$database);

	
		
		

    if($db_found) {
		
        $sql = "SELECT* FROM utilisateur ";
        $result = mysqli_query($db_handle, $sql);
        while($data = mysqli_fetch_assoc($result)) {
	
		//avec des variables session on recupere les info de la personne connectee
		

						
			$_SESSION['Num_utilisateur']=$data['Num_utilisateur'];
			$_SESSION['Nom']=$data['Nom'];
			$_SESSION['Prenom']=$data['Prenom'];
			$_SESSION['Mot_de_passe']=$data['Mot_de_passe'];
			$_SESSION['Adresse_email']=$data['Adresse_email'];
			$_SESSION['Pseudo']=$data['Pseudo'];
			$_SESSION['Lien_photo_profil']=$data['Lien_photo_profil'];
			$_SESSION['Lien_photo_couverture']=$data['Lien_photo_couverture'];
			$_SESSION['Description']=$data['Description'];
			$_SESSION['Phrase_d_intro']=$data['Phrase_d_intro'];
            $_SESSION['Type_user']=$data['Type_user'];
			
			echo $_SESSION['Num_utilisateur'];
			echo $_SESSION['Nom'];
			echo $_SESSION['Prenom'];
			echo $_SESSION['Mot_de_passe'];
			echo $_SESSION['Adresse_email'];
			echo $_SESSION['Pseudo'];
			echo $_SESSION['Lien_photo_profil'];
			echo $_SESSION['Lien_photo_couverture'];
			echo $_SESSION['Description'];
			echo $_SESSION['Phrase_d_intro'];
			echo $_SESSION['Type_user'];}
        	header('Location:Vous.php');
       
    }
    else { echo "Base de données non trouvée."; }
	

mysqli_close($db_handle);
?>