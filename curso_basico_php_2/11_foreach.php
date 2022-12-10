<?php // Ciclo foreach

$tienda_cafe = [
    "Americano" => 20,
    "Latte" => 25,
    "Capuccino" => 27.5,
    "Mocca" => 24,
];
$promo = "Latte";
/*
Con el ciclo foreach puedo recorrer una array indexada o asociativa.
También se pueden implementar las frases reservadas 'break'
o 'continue' para detener la ejecución o resumir al siguiente
ciclo.
*/
foreach ($tienda_cafe as $key => $value) {
    echo "El café $key cuesta: \${$value} USD\n";
}
