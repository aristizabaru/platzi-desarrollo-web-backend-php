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
    <p>Escribe correctamente las siguientes palabras</p>
    <form action='result.php'>
        <?php for ($i = 0; $i < count($words); $i++) : ?>
            <label for="word_<?= $i ?>"><?= str_shuffle($words[$i]) ?></label>
            <input type="text" name="word_<?= $i ?>">
        <?php endfor ?>
        <button type='submit'>Analizar resultados</button>
    </form>
</body>

</html>