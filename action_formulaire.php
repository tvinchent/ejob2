<?php
if (isset($_POST['boutton'])) {
    $erreurs = array();
    if (empty($_POST['name'])) {
        $erreurs['name'] = 'Pas de nom';
        echo ("Vous n'avez pas entré de nom");
    }
    if (empty($_POST['tel'])) {
        $erreurs['tel'] = 'Pas de tel';
        echo ("Vous n'avez pas entré de numéro de téléphone");
    }
    if (empty($_POST['subject'])) {
        $erreurs['subject'] = 'Pas de subject';
        echo ("Vous n'avez pas choisi de destinataire");
    }
    if (!isset($_POST['message']) || $_POST['message'] == '') {
        $erreurs['message'] = 'Pas de message';
        echo ("Vous n'avez pas saisi de texte");
    }
    if (empty($erreurs)) {
        $headers = $_POST['email'];
        mail("adresse@email.com", "Formulaire de mon CV en ligne", $_POST['message'], $headers);
        echo ("Votre mail a bien été envoyé.");
    }
}    
?>

    