<?php
session_start();

if (isset($_SESSION["erreur"])) {
  include("user.php");
} else {
  require("index_controller.php");
?>
  <!doctype html>
  <html lang="fr">

  <head>
    <title>Formulaire d'inscription</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="container" id="testBg">

      <div class="box">
        <div class="loaderContainer">
          <div class="loader">
            <span style="--i:1;">
            </span>
            <span style="--i:2;">
            </span>
            <span style="--i:3;">
            </span>
            <span style="--i:4;">
            </span>
            <span style="--i:5;">
            </span>
            <span style="--i:6;">
            </span>
            <span style="--i:7;">
            </span>
            <span style="--i:8;">
            </span>
            <span style="--i:9;">
            </span>
            <span style="--i:10;">
            </span>
            <span style="--i:11;">
            </span>
            <span style="--i:12;">
            </span>
            <span style="--i:13;">
            </span>
            <span style="--i:14;">
            </span>
            <span style="--i:15;">
            </span>
            <span style="--i:16;">
            </span>
            <span style="--i:17;">
            </span>
            <span style="--i:18;">
            </span>
            <span style="--i:19;">
            </span>
            <span style="--i:20;">
            </span>
          </div>
        </div>
        <div class="form hidden">
          <h2> Inscription </h2>
          <form action="index.php" method="post" class="">
            <div class="inputBx">
              <div class="test">
                <input type="text" name="lastName" value="<?= $arrayLastName[1]; ?>" style="border-color:<?= $arrayLastName[2]; ?>" placeholder="Nom de famille">
                <p><?= $arrayLastName[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="firstName" value="<?= $arrayFirstName[1]; ?>" style="border-color:<?= $arrayFirstName[2]; ?>" placeholder="Prénom">
                <p><?= $arrayFirstName[0]; ?></p>
              </div>
            </div>
            <div class="inputBx">
              <div class="test">
                <input type="date" name="birthDate" value="<?= $arrayBirthDate[1]; ?>" style="border-color:<?= $arrayBirthDate[2]; ?>" placeholder="Date de naissance">
                <p><?= $arrayBirthDate[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="countryBirth" value="<?= $arrayCountryBirth[1]; ?>" style="border-color:<?= $arrayCountryBirth[2]; ?>" placeholder="Pays de naissance">
                <p><?= $arrayCountryBirth[0]; ?></p>
              </div>
            </div>
            <div class="inputBx">
              <div class="test">
                <input type="text" name="nationality" value="<?= $arrayNationality[1]; ?>" style="border-color:<?= $arrayNationality[2]; ?>" placeholder="Nationalité">
                <p><?= $arrayNationality[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="adress" value="<?= $arrayAdress[1]; ?>" style="border-color:<?= $arrayAdress[2]; ?>" placeholder="Adresse">
                <p><?= $arrayAdress[0]; ?></p>
              </div>
            </div>
            <div class="inputBx">
              <div class="test">
                <input type="text" name="mail" value="<?= $arrayMail[1]; ?>" style="border-color:<?= $arrayMail[2]; ?>" placeholder="Email">
                <p><?= $arrayMail[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="phone" value="<?= $arrayPhone[1]; ?>" style="border-color:<?= $arrayPhone[2]; ?>" placeholder="Téléphone">
                <p><?= $arrayPhone[0]; ?></p>
              </div>
            </div>
            <div class="inputBx">
              <div class="test">
                <select name="diplome" id="diplome" style="border-color:<?= $arrayDiplome[2]; ?>">
                  <option value="0">--Choisir votre diplôme--</option>
                  <?php foreach ($arraySelect as $key => $value) {
                    if (!empty($_POST["diplome"]) && $_POST["diplome"] == $key) { ?>
                      <option value="<?= $key; ?>" selected><?= $value; ?></option>
                    <?php } else { ?>
                      <option value="<?= $key; ?>"><?= $value; ?></option>
                  <?php }
                  } ?>
                </select>
                <p><?= $arrayDiplome[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="numberPole" value="<?= $arrayNumberPole[1]; ?>" style="border-color:<?= $arrayNumberPole[2]; ?>" placeholder="Numéro pôle emploi">
                <p><?= $arrayNumberPole[0]; ?></p>
              </div>
            </div>
            <div class="inputBx">
              <div class="test">
                <input type="text" name="nbBadge" value="<?= $arrayNbBadge[1]; ?>" style="border-color:<?= $arrayNbBadge[2]; ?>" placeholder="Nombre de badge">
                <p><?= $arrayNbBadge[0]; ?></p>
              </div>
              <div class="test2">
                <input type="text" name="lienCode" value="<?= $arrayLienCode[1]; ?>" style="border-color:<?= $arrayLienCode[2]; ?>" placeholder="Liens codecademy">
                <p><?= $arrayLienCode[0]; ?></p>
              </div>
            </div>
            <div class="inputBxArea">
              <label for="superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
              <textarea id="superHero" name="superHero" rows="5" cols="33" style="border-color:<?= $arraySuperHero[2]; ?>"><?= $arraySuperHero[1]; ?></textarea>
              <p><?= $arraySuperHero[0]; ?></p>
            </div>
            <div class="inputBxArea">
              <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
              <textarea id="hack" name="hack" rows="5" cols="33" style="border-color:<?= $arrayHack[2]; ?>"><?= $arrayHack[1]; ?></textarea>
              <p><?= $arrayHack[0]; ?></p>
            </div>
            <div class="inputBxRadio">
              <p class="pRadio"> Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>

              <?php foreach ($arrayRadio as $key2 => $value2) {
                if (!empty($_POST["expProg"]) && $_POST["expProg"] == $key2) { ?>
                  <input type="radio" name="expProg" value="<?= $key2; ?>" checked>
                  <label for="<?= $value2; ?>"><?= $value2; ?></label>
                <?php } else { ?>
                  <input type="radio" name="expProg" value="<?= $key2; ?>">
                  <label for="<?= $value2; ?>"><?= $value2; ?></label>
              <?php }
              } ?>
            </div>
            <p><?= $arrayExpProg[0]; ?></p>
            <div class="inputBx">
              <input type="submit" value="Inscription" name="submit">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
      function showContent() {
        document.querySelector(".loaderContainer").classList.add("hidden");
        document.querySelector(".form").classList.remove("hidden");
      }

      setTimeout(showContent, 2000);

      var lastScrollTop = 0;
      var pos = -30;

      $(window).on("scroll", function() {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
          pos = (window.pageYOffset / 2.435) - 30;
          console.log(window.pageYOffset);
          document.getElementById('testBg').style.background = "linear-gradient(" + pos + "deg,#03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)";
          document.getElementById('testBg').style.backgroundAttachment = "fixed";
          document.getElementById('testBg').style.backgroundPosition = "center";
          document.getElementById('testBg').style.backgroundRepeat = "no-repeat";
          document.getElementById('testBg').style.backgroundSize = "cover";
        } else {
          pos = (window.pageYOffset / 2.435) - 30;
          console.log(window.pageYOffset);
          document.getElementById('testBg').style.background = "linear-gradient(" + pos + "deg,#03a9f4 0%, #3a78b7 50%, #262626 50%, #607d8b 100%)";
          document.getElementById('testBg').style.backgroundAttachment = "fixed";
          document.getElementById('testBg').style.backgroundPosition = "center";
          document.getElementById('testBg').style.backgroundRepeat = "no-repeat";
          document.getElementById('testBg').style.backgroundSize = "cover";
        }

        lastScrollTop = st;
      });

    </script>
  </body>

  </html>
<?php } ?>