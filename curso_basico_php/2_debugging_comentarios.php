<?php // Debugging y comentarios

/*
Debugging
Hay dos buildin functions que ayudan a hacer un debuggin
de varibales, podemos encontrar var var_dump() que
arroja información acerca de una varibale o
print_r() que imprime información de forma
leible para los humanos.
*/
$myArray = [
    "nombre" => "Andrés",
    "apellido" => "Aristizábal",
    "edad" => 20
];
echo "print_r example\n\n";
print_r($myArray);
echo "\n\nvar_dump example\n\n";
var_dump($myArray);
