<?php
$title = 'Matthieu PEREZ - Galerie photos';
$active1 = 'active';
$active2 = '';
$active3 = '';
require '../back/header.php';
?>

<!--Haut de page-->
<h1>Trouvez l'inspiration et exprimez votre créativité</h1>

<!--Corps de page-->

<body>
  <?php
  require '../back/pictures.php';
  $categories = ['Touret', 'Bouteille en verre', 'Canapé palette', 'Horloge'];
  $list = getList();

  foreach ($categories as $category) {
    echo '<h2>Des idées sur le thème : ' . $category . '</h2>' . PHP_EOL . '<div class="row justify-content-evenly">';
    for ($a = 0; $a < count($list); $a++) {
      if ($list[$a]['category'] == $category) {
        echo '
                    <div class="card zoom-m line-jump" style="width: 12rem;">
                        <img src="../pictures/' . $list[$a]['name'] . '.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>' . $list[$a]['title'] . '</h5>
                            <p class="card-text f-secondary">' . $list[$a]['text'] . '</p>
                        </div>
                    </div>';
      };
    };
  };
  ?>
</body>

<?php
$footer = 'Vous savez bricoler et vous voulez partager vos créations sur ma page ? Contactez-moi <a href="mailto:matthieu.perez30@gmail.com?subject=Je veux partager mes créations" class="link" target="_blank">ici</a>.';
require '../back/footer.php';
?>

</html>