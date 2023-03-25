<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
require_once 'phpmailer/config.php';

$mail = new PHPMailer(true);

$alert = '';

// Debug
/* echo var_dump($_POST);
die; */

if (isset($_POST) && !empty($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $config['username'];
        $mail->Password = $config['password'];
        $mail->SMTPSecure = "tls";
        $mail->Port = '587';

        $mail->setFrom($email);
        $mail->addAddress($config['receiver']);

        $mail->isHTML(true);
        $mail->Subject = 'Message via le Portfolio : ' . $firstname . ' ' . $lastname;
        $mail->Body = '<strong>Nom : </strong>' . strtoupper($lastname) . '<br><strong>Prénom : </strong>' . ucfirst(strtolower($firstname)) . '<br><strong>E-mail : </strong>' . $email . '<br><strong>Message : </strong>' . nl2br($message) . '';

        $mail->send();
        $alert = [
            'msg' => 'Message envoyé. Merci pour votre prise de contact.',
            'css' => ''
        ];

    } catch (Exception $e) {
        $alert = [
            'msg' => $e->getMessage(),
            'css' => 'error'
        ];
    }

} else {
    $alert = [
        'msg' => 'Aucun envoi',
        'css' => 'error'
    ];
}

$_SESSION["alert"] = $alert;

header('Location: index.php#sys_message');