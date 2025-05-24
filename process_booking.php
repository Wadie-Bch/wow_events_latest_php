<?php
require 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* 1. Récupération et (très) légère validation */
$data = filter_input_array(INPUT_POST, [
    'name'      => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email'     => FILTER_VALIDATE_EMAIL,
    'phone'     => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'eventType' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'message'   => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
]);

if (!$data || in_array(false, $data, true)) {
    http_response_code(400);
    exit('Invalid input');
}

/* 2. Sauvegarde en base */
$stmt = db()->prepare(
    "INSERT INTO bookings (name, email, phone, event_type, message)
     VALUES (:name, :email, :phone, :event, :msg)"
);
$stmt->execute([
    ':name'  => $data['name'],
    ':email' => $data['email'],
    ':phone' => $data['phone'],
    ':event' => $data['eventType'],
    ':msg'   => $data['message'],
]);

/* 3. Envoi du mail */
$mail = new PHPMailer(true);

try {
    // SMTP basics
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com'; // Replace with your SMTP host
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contact@woweventsofficial.com'; // Replace with your email
    $mail->Password   = 'Rachidghaba12@'; // Replace with your actual password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // ssl
    $mail->Port       = 465; // Common SSL port

    // Expediteur / destinataire
    $mail->setFrom('contact@woweventsofficial.com', 'WOW Events');

    /*  >>> Où RECEVOIR le mail ?
        Mets ici ton Gmail perso, ou bien le même compte Hostinger,
        ou même plusieurs `addAddress()` si besoin.               */
    $mail->addAddress('contact@woweventsofficial.com', 'Réservations WOW');

    // Contenu
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);
    $mail->Subject = 'Nouvelle demande de réservation';
    $mail->Body    = "
        <h2>Nouvelle réservation depuis le site</h2>
        <ul>
            <li><b>Nom :</b> {$data['name']}</li>
            <li><b>Email :</b> {$data['email']}</li>
            <li><b>Téléphone :</b> {$data['phone']}</li>
            <li><b>Type d’événement :</b> {$data['eventType']}</li>
        </ul>
        <p><b>Message :</b><br>" . nl2br($data['message']) . "</p>
    ";

    $mail->send();
    header('Location: index.php?success=1#book');
    exit;

} catch (Exception $e) {
    // En DEV, on peut afficher l’erreur ; en prod, log + message générique
    error_log("Booking mail error: {$mail->ErrorInfo}");
    http_response_code(500);
    exit('Erreur interne, réessayez plus tard.');
}
