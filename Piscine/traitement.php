
<?php

session_start();

$database='linkece';
$db_handle=mysqli_connect('localhost', 'root', '');
$db_found=mysqli_select_db($db_handle,$database);

	
		//recuperation des champs de la page
			if ((isset($_POST['password']))&&(isset($_POST['mail'])))
		{
			$mp=$_POST['password'];
			$email=$_POST['mail'];
		} 
		if(($mp=="")||($email=="")){
			echo 'Veuillez remplir le champ manquant ';}
		

    if($db_found) {
		
        $sql = "SELECT Adresse_email,Mot_de_passe,Num_utilisateur FROM utilisateur ";
        $result = mysqli_query($db_handle, $sql);
        while($data = mysqli_fetch_assoc($result)) {
	
		if(($data['Adresse_email']==$email) && ($data['Mot_de_passe']==$mp))
		{
			$_SESSION['Num_connecte']=$data['Num_utilisateur'];
            
		echo 'num connecte '; echo $_SESSION['Num_connecte'];}
        }
       
    }
    else { echo "Base de données non trouvée."; }

mysqli_close($db_handle);
?>