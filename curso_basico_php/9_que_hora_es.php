<?php // Primer programa

/*
https://www.php.net/manual/en/function.readline
Lee una sola línea del usurio
*/
$segundos = readline("Ingresa el tiempo en segundos: ");
$horas =  (int)($segundos / 3600);
$segundos = (int) ($segundos % 3600);
$minutos = (int)($segundos / 60);
$segundos = (int)($segundos % 60);


echo "Son $horas horas, $minutos minutos y $segundos segundos.\n";
