<?php
$title = 'Matthieu PEREZ - Galerie photos';
$active1 = '';
$active2 = '';
$active3 = '';
require '../back/header.php';
?>

<body>
  <?php
  echo '<h1>Vérification de l\'envoi des données</h1>';
  if (isset($_FILES['photo'])) {
    if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
      echo '<h2 class="f-warning">Erreur de téléchargement !</h2>';
    } elseif ($_FILES['photo']['size'] > 2000000) {
      echo '<h2 class="f-warning">Photo trop lourde !</h2>';
    } else {
      $fileName = uniqid();
      $infos = pathinfo($_FILES['photo']['name']);
      move_uploaded_file($_FILES['photo']['tmp_name'], '../pictures/downloaded/' . $fileName . '.' . $infos['extension']);
      echo '
      <h2 class="f-primary">Téléchargement réussi ! Merci pour nous avoir transféré ceci : </h2>
      <div class="row">
        <div class="col-6 justify-content-evenly">
          <img src="../pictures/downloaded/' . $fileName . '.' . $infos['extension'] . '">
        </div>  
      </div>';
    };
  };

  echo '</body>';
