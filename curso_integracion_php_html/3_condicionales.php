<?php
$is_auth = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>

<body>
    <!-- Mala práctica -->
    <h3>Bad rendering practice</h3>
    <?php
    if ($is_auth)
        echo "<p>The user is authorized</p>";
    else
        echo "<p>The user is NOT authorized</p>";
    ?>

    <!-- Práctica aceptale -->
    <h3>Aceptable rendering practice</h3>
    <?php if ($is_auth) { ?>
        <p>The user is authorized</p>
    <?php } else { ?>
        <p>The user is NOT authorized</p>
    <?php } ?>

    <!-- Mejor práctica -->
    <!-- El resultado es el mismo pero el código es más claro-->
    <h3>Best rendering practice</h3>
    <?php if ($is_auth) : ?>
        <p>The user is authorized</p>
    <?php else : ?>
        <p>The user is NOT authorized</p>
    <?php endif ?>
</body>

</html>