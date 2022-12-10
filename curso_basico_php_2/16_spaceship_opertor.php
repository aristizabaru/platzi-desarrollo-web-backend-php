<?php // Uso práctico del operador de nave espacial

$precios_cafe = [22, 24, 15, 30, 28, 27];

/*
usort ordena los elementos de un array mediante una función de comparación.
Sobre la funcion callback -> La función de comparación debe devolver un
entero menor, igual o mayor que cero si el primer argumento seconsidera
que sea respectivamente menor, igual o mayor que el segundo.
*/
usort($precios_cafe, function ($a, $b) {
    return $a <=> $b;
});

print_r($precios_cafe);
