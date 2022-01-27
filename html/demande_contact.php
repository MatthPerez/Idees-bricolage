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
  <div class="container-xxl" id="contact-anchor">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="wrapping bg-light p-3">

          <form action="../back/contact.php" method="post" enctype="multipart/form-data">

            <fieldset>
              <legend class="shadowed">Veuillez renseigner vos coordonnées</legend>
              <div class="row">
                <div class="col-md-5">

                  <div class="form-floating mb-3 d-flex">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom" required>
                    <label for="name" class="form-label">Votre nom</label>
                  </div>

                  <div class="form-floating mb-3 d-flex">
                    <input type="email" name="mail" id="mail" class="form-control" placeholder="test@email.com">
                    <label for="mail" class="form-label">Votre mail</label>
                  </div>

                  <div class="form-floating mb-3 d-flex">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Votre téléphone" pattern="[0-9]{10}">
                    <label for="phone" class="form-label">Votre téléphone</label>
                    <i class="fas fa-mobile-alt text-center d-flex align-items-center px-2 text-light"></i>

                  </div>
                </div>

                <div class="col-md-7 pt-5">
                  <label for="whichChoice">
                    <h3>Liste de choix</h3>
                  </label>
                  <select name="whichChoice" class="form-select">
                    <option selected></option>
                    <option value="choice01">choix 1</option>
                    <option value="choice02">choix 2</option>
                    <option value="choice03">choix 3</option>
                  </select>
                  <p class="text-dark pt-2">Texte de description</p>
                </div>
            </fieldset>
        </div>

        <div class="col-md-7 pt-5">
          <label for="photo">Image à envoyer : </label>
          <input type="file" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg" required></label>
        </div>

        <div>
          <h4 class="mb-2 pt-3">Texte supplémentaire</h4>
          <p class="text-dark">Titre du texte</p>
          <textarea name="message" id="message" cols="20" rows="3" class="form-control"></textarea>
        </div>

        <div class="row mt-5">
          <div class="col-md-4 d-flex align-items-center justify-content-center">
            <input type="submit" value="Envoyer" name="submit-btn" id="submit-btn" class="btn btn-light-primary p-3">
          </div>
        </div>
        </form>


      </div>
    </div>
    <div class="col-lg-4 pt-md-5 pt-sm-0 d-flex justify-content-center">
    </div>
  </div>
  </div><br><br><br>


</body>

<?php
$footer = 'Matthieu PEREZ - Tous droits réservés 2022 ©';
require '../back/footer.php';
?>

</html>