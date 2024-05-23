<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomContact = $_POST["nomContact"];
    $prenomContact = $_POST["prenomContact"];
    $emailContact = $_POST["emailContact"];
    $phoneContact = $_POST["phoneContact"];
    $adressContact = $_POST["adressContact"];

    $timestamp = date("D-m-y-H-i-s");
    

    $contenu = "Nom: $nomContact / Prenom: $prenomContact / Email: $emailContact / Téléphone: $phoneContact / Adresse: $adressContact /";
$nom_fichier = "$timestamp.txt";
    file_put_contents($nom_fichier, $contenu, FILE_APPEND);

    echo "Données extraites du formulaire Contact le $nom_fichier.";
}

?>
