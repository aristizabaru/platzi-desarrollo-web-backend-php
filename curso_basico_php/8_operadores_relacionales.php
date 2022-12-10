<?php // Operadores relacionales

/*
==  Igual (puede hacer casting automático)
=== Igualdad total o Idéntico (evalua tipo de dato)
!=  Diferencia (puede hacer casting automático)
!== Diferencia total (evalua tipo de dato)
<   Menor que
>   Mayor que
<=  Menor o igual que
>=  Mayor o igual que
<=> Operador Nave Espacial (spaceship operator)
    devuelve 1 si el operador de la izquierda es mayor que el de la derecha,
    devuelve 0 si son iguales o -1 si es menor.
??  Fusión de null (Null Coalescing Operator)
    Retorna el valor a la derecha del operador cuando el izquierdo es 'null'
=   Asignación

*/
$a = 5;
$b = "5";
$edad = null;

var_dump($a == $b);
var_dump($a === $b);
var_dump($a != $b);
var_dump($a !== $b);

echo (6 <=> 5) . "\n"; // 1
echo (5 <=> 5) . "\n"; // 0
echo (4 <=> 5) . "\n"; // -1

// Null Coalescing Operator
echo "La edad de Andrés es " . ($edad ?? "indefinida") . "\n";
