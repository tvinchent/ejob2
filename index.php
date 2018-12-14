<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet/less" href="m_b_style-less.less">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
   <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
   
    <title>Ejob2</title>
    
    
</head>

<body>
  <div class="bg-grey"></div>
    <div class="bg-purple"></div>



    <!-- LISTE ETUDIANT -->
      <div class="container-in visible">
        <div class="header">
          <h1>Liste étudiants - Edison 2018</h1>
          <nav>
            <a href="">2017</a>
            <a href="">2018</a>
            <a href="">2019</a>
          </nav>
          <a class="link" toHide="container-in" toToggle="container-out">Accéder au formulaire</a>  
        </div>
      
        <ul class="eleves">
          <?php 
            include './db.php';
            $req = $db->prepare('SELECT * FROM users');
            $req->execute();
            $eleves = $req->fetchAll();
            foreach ($eleves as $eleve) :
            ?> 
            <li class='modal-toggle' name="<?= $eleve['name'] ?>" spe="<?= $eleve['specialisation']?>" id="<?= $eleve['id'] ?>"><?= $eleve['name'] ?></li>
            <div class="modal" id="toggle<?= $eleve['id'] ?>">
              <span class="hideModal" id="<?= $eleve['id'] ?>"><i class="fas fa-times"></i></span>
              <span class="leftModal" idToHide="<?= $eleve['id'] ?>" idToToggle="<?= $eleve['id']-1 ?>"><i class="fas fa-chevron-left"></i></span>
              <span class="rightModal" idToHide="<?= $eleve['id'] ?>" idToToggle="<?= $eleve['id'] + 1 ?>"><i class="fas fa-chevron-right"></i></span>
              <p>TEST <?= $eleve['name'] ?></p>
              <br>
              <img src="./images/cv.png" alt=""></div>
          <?php
            endforeach;
            ?>   
        </ul> 
      </div>

      <!-- FORMULAIRE -->
        <div class="container-out">
            <div class="header">
                <h1>Contactez nous - Edison 2018</h1>
                <nav>
                    <a href="">2017</a>
                    <a href="">2018</a>
                    <a href="">2019</a>
                </nav>
                <a class="link" toHide="container-out" toToggle="container-in">Retourner au tableau</a>  
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

      <!-- SCRIPT -->
      
<script>
$(document).ready(function(){

  $('.modal-toggle').on('click', function(){
    idToToggle = $(this).attr('id')
    $('#toggle'+idToToggle).fadeIn()
  })
  $('.hideModal').on('click', function(){
    idToHide = $(this).attr('id')
    $('#toggle'+idToHide).fadeOut()
  })

  $('.leftModal').on('click', function(){
    idToToggle = $(this).attr('idToToggle')
    if(idToToggle == 0) {
      idToToggle = 11
    }
    idToHide = $(this).attr('idToHide')
    $('#toggle'+idToToggle).css('display', 'block')
    $('#toggle'+ idToHide).css('display', 'none')
  })
  $('.rightModal').on('click', function(){
    idToToggle = $(this).attr('idToToggle')
    if(idToToggle == 12) {
      idToToggle = 1
    }
    idToHide = $(this).attr('idToHide')
    $('#toggle'+idToHide).css('display', 'none')
    $('#toggle'+idToToggle).css('display', 'block')
  })

  $('.modal-toggle').mouseenter(function(){
    spe = $(this).attr('spe')
    $(this).text(spe)
  })
  $('.modal-toggle').mouseleave(function(){
    name = $(this).attr('name')
    $(this).text(name)
  })

  $('.link').on('click', function(){
    containerToToggle = $(this).attr('toToggle')
    containerToHide = $(this).attr('toHide')
    if($('.container-in').hasClass('visible')) {
      $('.bg-purple').css({
        transform: 'skew(135deg)'
      })
    } else if (!$('.container-in').hasClass('visible')){
      $('.bg-purple').css({
        transform: 'skew(45deg)'
      })
    }
    $('.'+containerToToggle).addClass('visible')
    $('.'+containerToHide).removeClass('visible')
  })
})
</script>
<script langage="Javascript">
           $(document).on('submit', '#formulaire_mail', function(e) {
            $.ajax({
                type: 'post',
                url: 'action_formulaire.php',
                data: $(this).serialize(),
            });
            e.preventDefault();
        });
    </script>
</body>
</html>
