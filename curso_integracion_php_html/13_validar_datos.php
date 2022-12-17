<?php // Validar datos

/*
Para validar datos se puede usar la función incorporada
filter_var que también se usa para sanitizar
https://www.php.net/manual/es/filter.filters.validate.php
https://www.php.net/manual/es/filter.filters.php
*/

// Si la validación es true retorna el tipo de dato y valor
$is_float = filter_var("0.9", FILTER_VALIDATE_FLOAT);
$is_int = filter_var("45", FILTER_VALIDATE_INT);
$is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
$is_url = filter_var("https://platzi.com", FILTER_VALIDATE_URL);
$is_email = filter_var("andres.aristizabal@gmail.com", FILTER_VALIDATE_EMAIL);
// Cuando la validación no es correcta retrona false
$is_no_email = filter_var("andres!gmail.com", FILTER_VALIDATE_EMAIL);

echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
var_dump($is_no_email);
echo "</pre>";
