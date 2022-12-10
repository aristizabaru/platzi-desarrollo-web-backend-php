<?php // Funciones con parámetros

/*
Las variables dentro de las funciones solo tienen un scope limitado
a ellas, además son descartadas una vez se termina la ejecución
de la misma a no ser que sean declaradas como estáticas
*/
function es_estudiante_legend($platzi_rank)
{
    if ($platzi_rank >= 20000)
        echo "Eres un estudiante LEGEND\n";
    else
        echo "Lo sentimos, aún no alcanzas el nivel LEGEND\n";
}

$current_rank = (int)readline("Ingresa tu ranking de Platzi: ");

es_estudiante_legend($current_rank);
