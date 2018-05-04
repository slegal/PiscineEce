<?php

session_start();

$database='linkece';
$db_handle=mysqli_connect('localhost', 'root','');
$db_found=mysqli_select_db($db_handle,$database);

	

		

    if($db_found) {
		
        $sql = "SELECT * FROM post WHERE Num_post= '1' ";
        $result = mysqli_query($db_handle, $sql);
        while($data = mysqli_fetch_assoc($result)) {
	
	echo $data['Contenu'];
						
		
        
       
    }
}
    else { echo "Base de données non trouvée."; }

mysqli_close($db_handle);
?>