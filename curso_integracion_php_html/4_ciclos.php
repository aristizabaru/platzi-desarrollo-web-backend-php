<?php
$usuarios = ["Andrés", "John", "Carlos"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>

<body>
    <h2>Lista de iteradores</h2>
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li><?= $i ?></li>
        <?php endfor ?>
    </ul>
    <h2>Lista de usuarios</h2>
    <ul>
        <?php foreach ($usuarios as $usuario) : ?>
            <li><?= $usuario ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>