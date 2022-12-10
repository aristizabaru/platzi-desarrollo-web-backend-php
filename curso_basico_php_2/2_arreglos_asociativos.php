<?php // Arreglos asociativos

// Esta estructura de datos asocia una llave a un valor
$edades = [
    "Carlos" => 38,
    "Natalia" => 18,
    "Juan" => 40
];

/*
Se deben usar {} para separar una expresión dentro de comillas dobles,
sino el programa causaría un error
*/
echo "La edad de carlos es {$edades['Carlos']}\n";
