<?php // Fucniones de Arreglos

/*
PHP posee una serie de funciones integradas que permiten la manipulación
de arreglos -> https://www.php.net/manual/en/ref.array.php
*/

$edades = [18, 22, 40, 34];

// count -> retorna cuantos elementos hay dentro de un arreglo
echo (count($edades) . "\n");

// array_push -> agrega un nuevo valor al final del array
array_push($edades, 13);
print_r($edades);

// is_array -> retorna true si es un array, false si no lo es
is_array($edades) ? print("Es array\n") : print("No es array\n");

/*
explode -> retorna una array de cadenas, cada una de ellas es una es una subcadena
de una cadena inicial. Se debe pasar como parámetro el separador que se usará
para la división
*/
$str = "Banano,Papaya,Mango,Uvas";
$str_explode = explode(",", $str);
print_r($str_explode);

/*
implode -> retorna un string a partir de un array. Se debe pasar como parámetro
el separador
*/
$array = ["Banano", "Papaya", "Mango", "Uvas"];
$array_implode = implode(",", $array);
print_r($array_implode . "\n");


// array_unique -> retorna nuevo array sin valores duplicados

$duplicate_values = [1, 2, 2, 5, 6, 7, 7, 3];
$no_duplicate = array_unique($duplicate_values);

print_r($no_duplicate);
