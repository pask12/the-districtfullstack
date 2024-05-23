


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\exception;

require_once 'vendor/autoload.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // var_dump($_SERVER);

    $nomCommande = $_POST["nomCommande"];
    $prenomCommande = $_POST["prenomCommande"];
    $emailCommande = $_POST["emailCommande"];
    $phoneCommande = $_POST["phoneCommande"];
    $adressCommande = $_POST["adressCommande"];

    $timestamp = date("D-m-y-H-i-s");
    
    $contenu = "Nom: $nomCommande / Prenom: $prenomCommande / Email: $emailCommande / Téléphone: $phoneCommande / Adresse: $adressCommande /";
    $nom_fichier = "$timestamp.txt";
    file_put_contents($nom_fichier, $contenu, FILE_APPEND);

    echo "Données extraites du formulaire Commande le $nom_fichier.";




$mail = new PHPMailer(true);

//on utilise SMTP
$mail->isSMTP();

// Adresse du serveur
$mail->Host = 'localhost';

//on désactive l'authentification SMTP
$mail->SMTPAuth = false;

//on configure le port SMTP(Mailhog)
$mail->Port = 1025;

//expéditeur du mail - adresse mail + nom(facultatif)
$mail->setFrom('from@thedistrict.com', 'The District Company');

//destinataire(s) - adresse et nom(facultatif)
$mail->addAddress($emailCommande);
// $mail->addAddress("client1@example.com", "Mr Client1");
// $mail->addAddress("client2@example.com", "Mr Client2");

//adresse de reply(facultatif)
$mail->addReplyTo("reply@thedistrict.com", "Reply");

//CC & BBC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

// on précise si l'on veut envoyerTest PHPMailer un email sous format HTML
// $mail->isHTML(true);

//On ajoute la/les piéces jointes
// $mail->addAttachement('/path/to/file.pdf');

//sujet du mail
$mail->Subject ='Votre commande';

//corps du message
$mail->Body = $contenu;

//on envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
if($mail){
    try{
        $mail->send();
        echo 'Email envoyé avec succès';
    }catch(Exception $e){
        echo"L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
    }
}
// header('Location:' . 'index.php');
}
?>












    