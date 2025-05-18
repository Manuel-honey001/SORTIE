<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $sexe = htmlspecialchars(trim($_POST['sexe']));
    $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
    $contact = htmlspecialchars(trim($_POST['contact']));
    $filiere = htmlspecialchars(trim($_POST['filiere']));
    $niveau = htmlspecialchars(trim($_POST['niveau']));
    $allergie = htmlspecialchars(trim($_POST['allergie']));
    $detail_allergie = htmlspecialchars(trim($_POST['detail_allergie']));
    $alcool = htmlspecialchars(trim($_POST['alcool']));
    $presence = htmlspecialchars(trim($_POST['presence']));

    $to = "bahpauln@gmail.com"; // Remplace par ton adresse e-mail

    $subject = "Nouvelle inscription";

    $message = "Nouvelle inscription reçue :\n\n";
    $message .= "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Sexe: $sexe\n";
    $message .= "Email: $mail\n";
    $message .= "WhatsApp: $contact\n";
    $message .= "Filière: $filiere\n";
    $message .= "Niveau: $niveau\n";
    $message .= "Allergie: $allergie\n";
    if (!empty($detail_allergie)) {
        $message .= "Détails allergie: $detail_allergie\n";
    }
    $message .= "Alcool: $alcool\n";
    $message .= "Présence: $presence\n";

    $headers = "From: $mail\r\nReply-To: $mail\r\n";

    if (mail($to, $subject, $message, $headers)) {
      // Envoie réussi
header("Location: paiement.html");
header("Location: paiement.html?nom=" . urlencode($nom) . "&prenom=" . urlencode($prenom));

    }
}
?>

