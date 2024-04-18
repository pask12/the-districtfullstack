<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomContact = $_POST["nomContact"];
    $phoneContact = $_POST["phoneContact"];
    $demandeContact = $_POST["demandeContact"];

    $timestamp = date("D-m-y-H-i-s");
    

    $contenu = "Nom: $nomContact / Téléphone: $phoneContact / Demande: $demandeContact /";
$nom_fichier = "$timestamp.txt";
    file_put_contents($nom_fichier, $contenu, FILE_APPEND);

    echo "Données extraites du formulaire Contact le $nom_fichier.";
}

?>
