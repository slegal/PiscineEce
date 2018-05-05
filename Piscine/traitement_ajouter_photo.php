<?php session_start();

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
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                    echo "L'envoi a bien été effectué !";
                }
             }
    }
    ////////////////////////////////////////////////////////////////////////////////////////////::


    mysqli_close($db_handle);
?>