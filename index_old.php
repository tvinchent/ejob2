<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" type="text/css" href="index.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <title>Ejob2</title>
    
    
</head>

<body>
  <div class="bg-grey"></div>
    <div class="bg-purple"></div>
      <div class="container">
        <div class="header">
          <h1>Liste étudiants - Edison 2018</h1>
          <nav>
            <a href="">2017</a>
            <a href="">2018</a>
            <a href="">2019</a>
          </nav>
          <a class="link" href="contact.php">Accéder au formulaire</a>  
        </div>
      
        <ul class="eleves">
          <?php 
          include './db.php';
          $req = $db->prepare('SELECT * FROM users');
          $req->execute();
          $eleves = $req->fetchAll();
          foreach ($eleves as $eleve) :
          ?> 
            <li class='modal-toggle' id="<?= $eleve['id'] ?>"><a target="_blank" ><?= $eleve['name'] ?></a></li>
            <div class="modal" id="toggle<?= $eleve['id'] ?>"> TEST <?= $eleve['name'] ?><span class="hideModal" id="<?= $eleve['id'] ?>">X</span>
          <br>
        <img src="./images/cv.png" alt=""></div>
          <?php
          endforeach;
          ?>   
        </ul> 
      </div>

<script>

$(document).ready(function(){
  $('.modal-toggle').on('click', function(){
    idToToggle = $(this).attr('id')
    $('#toggle'+idToToggle).css('display', 'block')
  })
  $('.hideModal').on('click', function(){
    idToHide = $(this).attr('id')
    $('#toggle'+idToToggle).css('display', 'none')
  })
  $('.link').on('click', function(){
    $('.container').toggleClass('paused')
  })
})
</script>
</body>
</html>
