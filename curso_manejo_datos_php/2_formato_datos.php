<?php // Formato de datos

/**
 * Dentro de PHP es muy común el manejo de cadenas. PHP ofrece todo un set
 * de funciones incorporadas para su manejo
 * 
 * https://www.php.net/manual/en/ref.strings.php
 */


echo "<pre>";
$text = "PHP es un LENGUAJE\n";
echo $text;
// strtolower -> devuelve cadena en minúsculas
echo strtolower($text);
// strtoupper -> devuelve cadena en mayúsculas
echo strtoupper($text);
// ucfirst -> devuelve primer char en mayúscula
echo ucfirst(strtolower($text));
// lcfirst -> devuelve primer char en minúscula
echo lcfirst(strtoupper($text));
// str_replace -> reemplaza una expresión por otra
$slug = str_replace(' ', '-', strtolower($text));
echo $slug;
// Modificación
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_LEFT);

/**
 * Seguridad
 * Para evitar inyección de etiquetas HTML en la BD siempre es buena práctica
 * usar la función strip_tags que retira las etiquetas HTML y PHP de un string
 */

$original_text = "<h1>Título</h1>";
echo $original_text;
echo strip_tags($original_text);

/**
 * Problema Multibyte
 * Hay caracteres que no pueden ser representados en un byte, fuera de ASCII, es indispensable
 * usar la opción multibyte dentro de PHP para que el manejo de strings no tenga errores.
 * Esto es relevante sobre todo para el guardado en BD.
 * 
 * mbstring está diseñada para manejar codificaciones basadas en Unicode, tales como
 * UTF-8 y UCS-2, y, por conveniencia, varias codificaciones de un solo byte.
 *
 * https://www.php.net/manual/es/intro.mbstring.php
 */
$string = "<h2>Aprender programación en el año 2022</h2>";
echo strtoupper($string);
echo mb_strtoupper($string);
echo "</pre>";
