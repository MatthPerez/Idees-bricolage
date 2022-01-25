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

          <form action="../../Idees-bricolage/back/contact.php" method="post">
            <div class="row">
              <div class="col-md-5">

                <div class="form-floating mb-3 d-flex">
                  <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom">
                  <label for="name" class="form-label">Votre nom</label>
                  <i class="fas fa-fingerprint text-center d-flex align-items-center px-2 text-light"></i>
                </div>

                <div class="form-floating mb-3 d-flex">
                  <input type="email" name="mail" id="mail" class="form-control" placeholder="test@email.com">
                  <label for="mail" class="form-label">Votre mail</label>
                  <i class="fas fa-envelope text-center d-flex align-items-center px-2 text-light"></i>
                </div>

                <div class="form-floating mb-3 d-flex">
                  <input type="tel" name="phone" id="phone" class="form-control" placeholder="Votre téléphone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                  <label for="phone" class="form-label">Votre téléphone</label>
                  <i class="fas fa-mobile-alt text-center d-flex align-items-center px-2 text-light"></i>

                </div>
              </div>

              <div class="col-md-7 pt-5">
                <label for="whichChoice">
                  <h3 class="text-primary">Liste de choix</h3>
                </label>
                <select name="whichChoice" class="form-select">
                  <option selected></option>
                  <option value="choice01">choix 1</option>
                  <option value="choice02">choix 2</option>
                  <option value="choice03">choix 3</option>
                </select>
                <p class="text-dark pt-2">Texte de description</p>
              </div>
            </div>

            <div class="col-md-7 pt-5">
              <label for="photoId">Photo d'identité</label>
              <input type="file" id="photoId" name="photoId" accept="image/png, image/jpeg, image/jpg"></label>
            </div>

            <div>
              <h4 class="mb-2 pt-3">Texte supplémentaire</h4>
              <p class="text-dark">Titre du texte</p>
              <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
            </div>
            <div class="row mt-5">
              <div class="col-md-8">
                <p class="text-primary">J'accepte de communiquer mes informations personnelles<span class="text-warning"> *</span></p>
                <input type="checkbox" class="form-check-input" name="check_rgpd" id="check-rgpd">
                <label for="check-rgpd" class="text-warning">J'accepte</label>
                <p class="text-dark pt-3"><span class="text-warning">* </span"><span class=" text-dark small">Vos informations resteront confidentielles.</span></p>
              </div>
              <div class="col-md-4 d-flex align-items-center justify-content-center">
                <input type="submit" value="Envoyer" name="submit-btn" id="submit-btn" class="btn p-3">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 pt-md-5 pt-sm-0 d-flex justify-content-center">
        <div>
          <i class="fas fa-mail-bulk d-flex justify-content-center my-3 text-light"></i>
        </div>
      </div>
    </div>
  </div>


</body>

<?php
$footer = '';
require '../back/footer.php';
?>

</html>