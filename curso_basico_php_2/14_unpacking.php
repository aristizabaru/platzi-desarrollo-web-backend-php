<?php // 'Unpacking' ... operator

$array_1 = [1, 2, 3];
$array_2 = [4, 5, 6];

// El operador unpacking extrae los valores del array
$result = [...$array_1, ...$array_2];
print_r($result);

/*
Cuando los valores no están en una estructura de datos el operador
... me permite 'empacarlos' en un array permitiendo tener
funciones variádicas dentro de PHP
*/
function suma_infinita(...$params)
{
    $suma = 0;
    foreach ($params as $num) {
        $suma += $num;
    }
    echo "La sumatoria es: $suma\n";
}

suma_infinita(1, 2, 3, 4);
