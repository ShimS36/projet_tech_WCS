<?php
// Informations de connexion
$adresseBdd = "localhost:3308";
$nomBdd = "exotechwcs";
$utilisateurBdd = "root";
$mdpBdd = "root";

try {

    $connexion = new PDO("mysql:host=" . $adresseBdd . ";dbname=" . $nomBdd . ";charset=utf8", $utilisateurBdd, $mdpBdd);
}
catch(PDOException $erreur) {

    echo "connexion échouée:" . $erreur->getMessage();
}
