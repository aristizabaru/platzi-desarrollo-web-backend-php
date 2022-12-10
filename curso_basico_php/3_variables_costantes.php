<?php // Variables y constantes

// Las variables se definen con un signo de $ al comienzo
$variable = "valor";

echo "\$variable = $variable\n";

/*
Las constantes se declara mediante la función
incorporada definene() y por estandar van en
mayúsculas sostenida. Las constantes no
pueden ser redefinidas.
*/

define("CONSTANT", 2);

echo "CONSTANT = " . CONSTANT . "\n";
