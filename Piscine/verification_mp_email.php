<?php
require 'fonction_recup-exp.php';

session_start();

$database='linkece';
$db_handle=mysqli_connect('localhost', 'root', 'p21');
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
		
        $sql = "SELECT Adresse_email, Mot_de_passe, Num_utilisateur FROM utilisateur ";
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
        while($data = mysqli_fetch_assoc($result)) {
	
		//avec des variables session on recupere les info de la personne connectee
		if(($data['Adresse_email']==$email) && ($data['Mot_de_passe']==$mp))
		{
			$num_u=$data['Num_utilisateur'];
			
		// fonction qui recupere les experiences	avec en parametre $num_u////////////	
		recupexp($num_u);
    }}}
    else { echo "Base de données non trouvée."; }

mysqli_close($db_handle);
?>