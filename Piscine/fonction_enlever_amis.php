<?php

session_start();
/* Ci-dessous, la fonction qui prend en parametre le Num_utilisateur et 
affiche les experiences de l'utilisateur */

	$database='linkece';
	$db_handle=mysqli_connect('localhost', 'root', '');
	$db_found=mysqli_select_db($db_handle,$database);
	
    if($db_found) {
		
        $data =$_SESSION['Num_utilisateur'];
        $data2=$_SESSION['tmp2'];

        
		
		
		
        $sql = "DELETE FROM contact WHERE Num_utilisateur=$data AND Num_ami=$data2";
        $sql2 = "DELETE FROM contact WHERE Num_utilisateur=$data2 AND Num_ami=$data";
       
        
        ///REQUETE SQL
        $result = mysqli_query($db_handle, $sql) or die(mysql_error())  ;
        $result = mysqli_query($db_handle, $sql2) or die(mysql_error())  ;
	
	header('Location: Reseau.php');
		}
    else { echo "Base de données non trouvée."; }

	mysqli_close($db_handle);
		
			
        
				

?>