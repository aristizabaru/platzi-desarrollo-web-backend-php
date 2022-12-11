<?php
require_once "controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Put the words in order</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Put the words in order</h1>
    <p>Estos son los resultados de tu intento</p>
    <div class="result">
        <?php for ($i = 0; $i < count($words); $i++) : ?>
            <?php if ($_REQUEST["word_" . $i] === $words[$i]) : ?>
                <p><span class="score">¡Acertaste!</span> La palabra ingresada es correcta</p>
            <?php else : ?>
                <p><span class="fail">¡Fallaste!</span> La palabra correca es <strong><?= $words[$i] ?></strong></p>
            <?php endif ?>
        <?php endfor ?>
    </div>
    <button type="button" onclick="window.open('index.php', '_self')">Volver a jugar</button>
</body>

</html>