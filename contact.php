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
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejob2</title>
    
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="bg-grey"></div>
    <div class="bg-purple"></div>
        <div class="container">
            <div class="header">
                <h1>Contactez nous - Edison 2018</h1>
                <nav>
                    <a href="">2017</a>
                    <a href="">2018</a>
                    <a href="">2019</a>
                </nav>
                <a class="link" href="index.php">Retourner au tableau</a>  
            </div>
            <form class="form" name="formulaire" id="formulaire_mail" method="post">
                <br>
                <div class="input-mail-name">
                    <input name="name" class="" type="text" placeholder="Votre nom">
                    <input type="email" name ="email" placeholder="Votre mail">
                </div>
                <br>
                <div class="input-tel-select">
                    <input name="tel" type="phone" placeholder="Votre numéro de téléphone">
                    <select name="subject">
                            <option selected>--Choisissez un destinataire--</option>
                            <option value="Arbouille Maxime">Arbouille Maxime</option>
                            <option value="Bouchez Marc">Bouchez Marc</option>
                            <option value="Delcampe Aymeric">Delcampe Aymeric</option>
                            <option value="Descharles Vincent">Descharles Vincent</option>
                            <option value="Guerinot Theo">Guerinot Theo</option>
                            <option value="Jeannin Jessy">Jeannin Jessy</option>
                            <option value="Macret Jonathan">Macret Jonathan</option>
                            <option value="Mouillard Remi">Mouillard Remi</option>
                            <option value="Passeleu Thomas">Passeleu Thomas</option>
                            <option value="Reisenleiter Bryan">Reisenleiter Bryan</option>
                            <option value="Thomas Antoine">Thomas Antoine</option>
                    </select>
                </div>
                <br>
                <div class="input-message-check">
                    <textarea id="form-message" name="message" placeholder="Votre message"></textarea>
    
                </div>
                <label for="checkbox" class="checkbox">Newsletter</label><input type="checkbox">
                <br>
                <input class='btn-subtmit' name="boutton" type="submit" value="Envoyer" >
                    
            </form>
        </div>

</body>
</html>