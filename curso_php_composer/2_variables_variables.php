<?php // Variables variables

/**
 * PHP tiene la capacidad de generar variables dinámicas, comunmente llamdas
 * 'variables variables'. Básicamente es un juego de llamados de valor y el
 * uso del signo '$' para lograr una interactividad en el resultado de
 * la variable.
 */

$app = "name";
$name = "platzi";;

echo $$app; // imprime 'platzi'