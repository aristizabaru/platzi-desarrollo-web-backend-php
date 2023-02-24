<?php // Extracción de datos

/**
 * Dentro de PHP es muy común el manejo de cadenas. PHP ofrece todo un set
 * de funciones incorporadas para su manejo
 * 
 * https://www.php.net/manual/en/ref.strings.php
 */

echo "<pre>";

// substr
$post = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus totam, repellat consequatur at dignissimos dolores sunt, harum magnam placeat ducimus temporibus fuga cumque cum voluptatem expedita neque provident ea! Dolor.";
// Con substr se puede construir el extracto de un post rápidamente
$extract = substr($post, 0, 20);

echo "$extract... [ver más]\n";

/**
 * La función trim ayuda a limpiar espacios en blanco en textos
 */

$basic_text = "    Hola  ";
$trim = trim($basic_text);

echo "Texto sin usar trim: $basic_text\n";
echo "Texto usando trim: $trim\n";

/**
 * Unas de las funciones más usadas dentro de PHP es explode e implode
 * explode -> devuelve un array a partir de un string
 * implode -> devuelve un string a partir de un array
 */

$data = 'javascript, php, laravel';
$tags = explode(', ', $data);

print_r($tags);

echo implode(', ', $tags);

echo "</pre>";
