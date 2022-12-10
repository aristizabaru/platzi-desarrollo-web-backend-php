<?php // Ciclo do...while

/*
En el ciclo do..while se ejecuta mínimo una vez y se continua ejecutando
mientras la condición boleana sea true
*/

$username = ["aristizabaru", "jlopera"];
$user = null;
do {
    $user = readline("Por favor ingresa un nuevo username: ");
} while (in_array($user, $username));

echo "Bienvenido $user. Tu username ha sido registrado.\n";
