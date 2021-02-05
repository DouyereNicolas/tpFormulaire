<?php $arraySelect = [1  => "sans", 2  => "bac", 3  => "bac +2", 4  => "bac +3", 5  => "supérieur"]; ?>

<!doctype html>
<html lang="fr">

<head>
    <title>Page Utilisateur</title>
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
                <h2> Votre Profil </h2>
                <form action="index.php" method="post">
                    <div class="inputBx">
                        <div class="test">
                            <p class="pUser">Votre Nom : <?= $_SESSION["post"]["lastName"] ?></p>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre Prénom : <?= $_SESSION["post"]["firstName"] ?></p>
                        </div>
                    </div>
                    <div class="inputBx">
                        <div class="test">
                            <p class="pUser">Votre Date de naissance : <?= $_SESSION["post"]["birthDate"] ?></p>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre Lieu de naissance : <?= $_SESSION["post"]["countryBirth"] ?></p>
                        </div>
                    </div>
                    <div class="inputBx">
                        <div class="test">
                            <p class="pUser">Votre Nationalité : <?= $_SESSION["post"]["nationality"] ?></p>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre adresse : <?= $_SESSION["post"]["adress"] ?></p>
                        </div>
                    </div>
                    <div class="inputBx">
                        <div class="test">
                            <p class="pUser">Votre email : <?= $_SESSION["post"]["mail"] ?></p>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre numéro de téléphone : <?= $_SESSION["post"]["phone"] ?></p>
                        </div>
                    </div>
                    <div class="inputBx">
                        <div class="test">

                            <?php foreach ($arraySelect as $key => $value) {
                                if ($_SESSION["post"]["expProg"] == $key) { ?>
                                    <p class="pUser">Votre Diplôme : <?= $value ?></p> <?php };
                                                                                }; ?>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre numéro de pôle emploi : <?= $_SESSION["post"]["numberPole"] ?></p>
                        </div>
                    </div>
                    <div class="inputBx">
                        <div class="test">
                            <p class="pUser">Votre nombre de badge : <?= $_SESSION["post"]["nbBadge"] ?></p>
                        </div>
                        <div class="test2">
                            <p class="pUser">Votre lien code académie : <?= $_SESSION["post"]["lienCode"] ?></p>
                        </div>
                    </div>
                    <div class="inputBxArea">
                        <p class="textArea">Votre super hero et pourquoi :<br /><br /> <?= $_SESSION["post"]["superHero"] ?></p>
                    </div>
                    <div class="inputBxArea">
                        <p class="textArea">Votre Hack : <br /><br /> <?= $_SESSION["post"]["hack"] ?></p>
                    </div>
                    <div class="inputBxRadio">
                        <?php if ($_SESSION["post"]["expProg"] == 1) { ?>
                            <p>Vous n'avez pas d'éxperience dans le domaine de la programmation</p>
                        <?php } else { ?>
                            <p>Vous avez une ou plusieurs éxperience dans le domaine de la programmation</p>
                        <?php } ?>
                    </div>
                    <div class="inputBx">
                        <a href="deco.php"><input type="text" onclick="showContent();" class="inputDeco" value="Déconnexion" name="submit"></input></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
        function showContent() {
            document.querySelector(".loaderContainer").classList.add("hidden");
            document.querySelector(".form").classList.remove("hidden");
        }
        setTimeout(showContent, 2000);
    </script>
</body>

</html>