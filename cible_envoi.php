<?php
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error']==0){
    if ($_FILES['monfichier']['size'] < 1000000) {
        $infosFichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosFichier['extension'];
        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
        if (in_array($extension_upload, $extensions_autorisees))
        {
            // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
            echo "L'envoi a bien été effectué !";
        }
    }
}