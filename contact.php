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
    <link rel="stylesheet" href="form_contact.css">
</head>

<body>

    <div class="container">
        <nav class="navbar">
            <a href="">2017</a>
            <a href="">2018</a>
            <a href="">2019</a>
        </nav>
        
        <h1>Formulaire</h1>
        
        <a href="index.php">Revenir à la page précédente.</a>
        <form name="formulaire" id="formulaire_mail" method="post">
                <label>   <br>Nom : </label> <input name="name" class="" type="text">
                <label>  <br>Email : </label><input type="email" name ="email">
                <label>  <br>Téléphone : </label><input name="tel" type="phone">
               <label> Destinataire :</label> <select name="subject">
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
                <label>   Message :</label> <textarea id="form-message" name="message"> </textarea>
                <label><input type="checkbox"> Newsletter</label>
                
                <input name="boutton" type="submit" value="Envoyer" >
                
        </form>
    </div>
</body>
</html>