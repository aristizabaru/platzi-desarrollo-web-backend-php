<?php // Reto: completar código

/*
Se debe completar el siguiente código escribiendo la función obtener_hora

echo "¡Hola! ¿Me podrías decir qué hora es?\n";
echo "¡Claro! Son las " . obtener_hora();
echo "\n";

*/

date_default_timezone_set('America/Bogota');

function obtener_hora()
{
    return date('h:i A');
}

echo "¡Hola! ¿Me podrías decir qué hora es?\n";
echo "¡Claro! Son las " . obtener_hora();
echo "\n";
