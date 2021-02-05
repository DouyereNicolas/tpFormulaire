<?php 
$erreur = 15;
$arrayLastName = ["", "", "rgba(255,255,255,0.2);"];
$arrayFirstName = ["", "", " rgba(255,255,255,0.2);"];
$arrayBirthDate = ["", "", " rgba(255,255,255,0.2);"];
$arrayCountryBirth = ["", "", " rgba(255,255,255,0.2);"];
$arrayNationality = ["", "", " rgba(255,255,255,0.2);"];
$arrayAdress = ["", "", " rgba(255,255,255,0.2);"];
$arrayMail = ["", "", " rgba(255,255,255,0.2);"];
$arrayPhone = ["", "", " rgba(255,255,255,0.2);"];
$arrayDiplome = ["", "", " rgba(255,255,255,0.2);"];
$arrayNumberPole = ["", "", " rgba(255,255,255,0.2);"];
$arrayNbBadge = ["", "", " rgba(255,255,255,0.2);"];
$arrayLienCode = ["", "", " rgba(255,255,255,0.2);"];
$arraySuperHero = ["", "", " rgba(255,255,255,0.2);"];
$arrayHack = ["", "", " rgba(255,255,255,0.2);"];
$arrayExpProg = ["", "", " rgba(255,255,255,0.2);"];
$arraySelect = [1  => "sans", 2  => "bac", 3  => "bac +2", 4  => "bac +3", 5  => "supérieur"];
$arrayRadio = [1 => "non", 2 => "oui"];

if (isset($_POST["submit"])) {


  if (isset($_POST["lastName"])) {
    $lastName = htmlentities($_POST["lastName"]);
    $arrayLastName[1] = $lastName;
    if (!preg_match("/^[a-z ,.'-]+$/i", $lastName)) {
      $arrayLastName[0] = "Veuillez saisir un nom de famille correct";
      $arrayLastName[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["firstName"])) {
    $firstName = htmlentities($_POST["firstName"]);
    $arrayFirstName[1] = $firstName;
    if (!preg_match("/^[a-z ,.'-]+$/i", $firstName)) {
      $arrayFirstName[0] = "Veuillez saisir un prénom correct";
      $arrayFirstName[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["birthDate"])) {
    var_dump($_POST["birthDate"]);
    $birthDate = htmlentities($_POST["birthDate"]);
    $arrayBirthDate[1] = $birthDate;
    if (!preg_match("/^([1-9]){4}(\-)([0-9]){2}(\-)([0-9]){2}$/i", $birthDate)) {
      $arrayBirthDate[0] = "Veuillez saisir une date au format jj/mm/aaaa";
      $arrayBirthDate[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["countryBirth"])) {
    $countryBirth = htmlentities($_POST["countryBirth"]);
    $arrayCountryBirth[1] = $countryBirth;
    if (!preg_match("/^[a-z ,.'-]+$/i", $countryBirth)) {
      $arrayCountryBirth[0] = "Veuillez saisir un pays de naissance correct";
      $arrayCountryBirth[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["nationality"])) {
    $nationality = htmlentities($_POST["nationality"]);
    $arrayNationality[1] = $nationality;
    if (!preg_match("/^[a-z ,.'-]+$/i", $nationality)) {
      $arrayNationality[0] = "Veuillez saisir une nationalité correcte";
      $arrayNationality[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["adress"])) {
    $adress = htmlentities($_POST["adress"]);
    $arrayAdress[1] = $adress;
    if (!preg_match("/^([0-9a-z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/i", $adress)) {
      $arrayAdress[0] = "Veuillez saisir une adresse correcte";
      $arrayAdress[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["mail"])) {
    $mail = $_POST["mail"];
    $arrayMail[1] = $mail;
    if (!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i", $mail)) {
      $arrayMail[0] = "Veuillez saisir une adresse mail correct";
      $arrayMail[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["phone"])) {
    $phone = htmlentities($_POST["phone"]);
    $arrayPhone[1] = $phone;
    if (!preg_match("/^0[1-68]([-. ]?[0-9]{2}){4}$/i", $phone)) {
      $arrayPhone[0] = "Veuillez saisir un numéro de téléphone correct";
      $arrayPhone[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }
  if (!isset($_POST["diplome"]) || $_POST["diplome"] == 0) {

    $arrayDiplome[0] = "Veuillez selectionner un Diplome correct";
    $arrayDiplome[2] = "red";
  } else {
    $erreur = $erreur - 1;
  }


  if (isset($_POST["numberPole"])) {
    $numberPole = htmlentities($_POST["numberPole"]);
    $arrayNumberPole[1] = $numberPole;
    if (!preg_match("/^([0-9a-z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/i", $numberPole)) {
      $arrayNumberPole[0] = "Veuillez saisir un numéro de pole emploi correct";
      $arrayNumberPole[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["nbBadge"])) {
    $nbBadge = htmlentities($_POST["nbBadge"]);
    $arrayNbBadge[1] = $nbBadge;
    if (!preg_match("/^[0-9]+$/i", $nbBadge)) {
      $arrayNbBadge[0] = "Veuillez saisir un nombre de badge correct";
      $arrayNbBadge[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }


  if (isset($_POST["superHero"])) {
    $superHero = $_POST["superHero"];
    $arraySuperHero[1] = $superHero;
    if (!preg_match("/^[0-9,a-z ,.'-]+$/i", $superHero) || $superHero == "") {
      $arraySuperHero[0] = "Veuillez saisir un texte correct";
      $arraySuperHero[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (isset($_POST["hack"])) {
    $hack = $_POST["hack"];
    $arrayHack[1] = $hack;
    if (!preg_match("/^[0-9,a-z ,.'-]+$/i", $hack) || $hack == "") {
      $arrayHack[0] = "Veuillez saisir un texte correct";
      $arrayHack[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }

  if (!isset($_POST["expProg"])) {

    $arrayExpProg[0] = "Veuillez selectionner une réponse correct";
  } else {
    $erreur = $erreur - 1;
  }

  if (isset($_POST["lienCode"])) {
    $lienCode = $_POST["lienCode"];
    $arrayLienCode[1] = $lienCode;
    if (filter_var($lienCode, FILTER_VALIDATE_URL) == false) {
      $arrayLienCode[0] = "Veuillez saisir un lien valide";
      $arrayLienCode[2] = "red";
    } else {
      $erreur = $erreur - 1;
    }
  }
}
if ($erreur == 0) {
  $_SESSION["erreur"] = 1;
  $_SESSION["post"] = $_POST;
  header("location: index.php");
}

?>