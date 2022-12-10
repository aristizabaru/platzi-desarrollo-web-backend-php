<?php // Operadores aritméticos

/*
Adición         => +    $a + $b
Sustracción     => -    $a - $b
Multiplicación  => *    $a * $b
División        => /    $a / $b
Módulo          => %    $a % $b
Potenciación    => **   $a ** $b
Identidad       => +    +$a         Convierte str a int según el caso
Negación        => -    -$a         Convierte num positivo a negativo
*/
$a = 5;
$b = 3;
$c = "9";

echo $a + $b . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b . "\n";
echo $a % $b . "\n";
echo $a ** $b . "\n";
echo +$c . "\n";
echo -$a . "\n";
