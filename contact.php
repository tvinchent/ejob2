<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejob2</title>

    <link rel="stylesheet" href="form_contact.css">
</head>

<body>

    <nav class="navbar">
        <a href="">2017</a>
        <a href="">2018</a>
        <a href="">2019</a>
    </nav>
    
    <h1>Formulaire</h1>

    <a href="">Revenir à la page précédente.</a>
    <form name="formulaire" method="post" action="mailto:yourdaddy@papa.com">
            <label>   <br>Nom : </label> <input class="" type="text">
            <label>  <br>Email : </label><input type="email">
            <label>  <br>Téléphone : </label><input type="phone">
           <label> Destinataire :</label> <select name="subject">
                <option value="">Arbouille Maxime</option>
                <option value="">Bouchez Marc</option>
                <option value="">Delcampe Aymeric</option>
                <option value="">Descharles Vincent</option>
                <option value="">Guerinot Théo</option>
                <option value="">Jeannin Jessy</option>
                <option value="">Macret Jonathan</option>
                <option value="">Mouillard Rémi</option>
                <option value="">Passeleu Thomas</option>
                <option value="">Reisenleiter Bryen</option>
                <option value="">Thomas Antoine</option>
           </select>
            <label>   Message :</label> <textarea id="form-message"> </textarea>
            <label>  Newsletter</label><input type="checkbox">
            
            <input type="submit" value="Envoyer">
</body>
</html>