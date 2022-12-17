<?php

require_once "mail.php";

$status = "";
$error_msg = "";

function validate($name, $email, $subject, $message, ...$other_data)
{
  return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
}

// Validar si el formulario fue enviado
if (isset($_POST["form"])) {

  // Validar si campos no están vacios
  if (validate(...$_POST)) {
    // Se deben de sanitizar los datos, en este ejemplo se omite el paso
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $body = "$name <$email> Te envía el siguiente mensaje: </br></br>$message";

    /*
    Eviar correo
    En este punto se usará la librería phpmailer ya que es más segura de usar
    que la función integrada de php mail()
    */
    $send_ok = send_mail($subject, $body, $email, $name, true);

    // Valida si el email se pudo enviar
    if (!$send_ok) {
      $status = "danger";
      $error_msg = "hay un error en la conexión. Intente más tarde";
    } else {
      $status = "success";
    }
  } else {
    $status = "danger";
    $error_msg = "algunos campos no fueron diligenciados de la forma esperada";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario Contacto</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <?php if ($status === "success") : ?>
    <div class="alert success">
      <span>Mensaje enviado con éxito</span>
    </div>
  <?php endif ?>
  <?php if ($status === "danger") : ?>
    <div class="alert danger">
      <span>Surgió un problema: <?= $error_msg ?></span>
    </div>
  <?php endif ?>

  <form action="./" method="POST">
    <h1>¡Contáctanos!</h1>
    <div class="input-group">
      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" />
    </div>
    <div class="input-group">
      <label for="email">Correo</label>
      <input type="email" name="email" id="email" />
    </div>
    <div class="input-group">
      <label for="subject">Asunto</label>
      <input type="text" name="subject" id="subject" />
    </div>
    <div class="input-group">
      <label for="message">Mensaje</label>
      <textarea name="message" id="message"></textarea>
    </div>
    <div class="button-container">
      <button type="submit" name="form">Enviar</button>
    </div>
    <div class="contact-info">
      <div class="info">
        <span>13 Saw Mill Circle, North 24-50</span>
      </div>
      <div class="info">
        <span>+1 345 7865</span>
      </div>
    </div>
  </form>
</body>

</html>