<?php // Ejecuta envío de correo

require_once "vendor/autoload.php";
require_once "config.php";

use PHPMailer\PHPMailer\PHPMailer;

// set configuration env
$mail_config = $phpmailer_conf["mailtrap"];

function send_mail($subject, $body, $email, $name, $html = false)
{
    global $mail_config;

    //Server settings
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = $mail_config['host'];
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = $mail_config['port'];
    $phpmailer->Username = $mail_config['username'];
    $phpmailer->Password = $mail_config['password'];

    //Recipients
    $phpmailer->setFrom('contacto@example.com', 'Andres');
    $phpmailer->addAddress($email, $name); //Add a recipient

    //Content
    $phpmailer->isHTML($html); //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body = $body;

    // Activo condificacción utf-8
    $phpmailer->CharSet = 'UTF-8';

    // send mail
    return $phpmailer->send();
}
