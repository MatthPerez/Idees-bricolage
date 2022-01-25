<?php
$title = 'Matthieu PEREZ - Acheter';
$active1 = '';
$active2 = '';
$active3 = 'active';
require '../back/header.php';
?>

<!--Haut de page-->
<h1>Formulaire de contact</h1>

<!--Corps de page-->

<body>
  <div class="contact-wrapper">
    <form class="form-horizontal" method="post" action="contact.php">
      <fieldset>
        <legend>Identité</legend>
        <label for="name">Prénom + NOM</label><br>
        <input type="text" id="name" placeholder="Jean MOULIN" name="name" required><br>
      </fieldset>
    </form>
  </div>


</body>

<?php
$footer = '';
require '../back/footer.php';
?>

</html>