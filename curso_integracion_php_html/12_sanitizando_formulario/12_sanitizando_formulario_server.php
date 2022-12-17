<?php // Sanitizando datos del formulario

/*
Una vez se valida que la variable esté defida y que no esté vacia
se procede a sanitizar los datos del formulario para evitar
posibles injecciones de código o datos con formatos no válidos.
A continuación alunas funciones incoporadas que ayudan a este
propósito
*/

// Se reciben las variables desde POST

$name = $_POST['nombre'];
$username = $_POST['username'];
$email = $_POST['email'];
$age = $_POST['age'];

// Agunas funciones para sanitizar datos

/*
htmlentities — Convierte todos los caracteres aplicables a entidades HTML
https://www.php.net/manual/es/function.htmlentities.php
*/
$htmlentities = htmlentities($name);

/*
addslashes — Devuelve un string con barras invertidas delante de los
caracteres que necesitan ser escapados. Estos caracteres son la comilla
simple ('), comilla doble ("), barra invertida (\) y NUL (el byte null).
https://www.php.net/manual/es/function.addslashes.php
*/
$addslashes = addslashes($username);

/*
preg_replace — Realiza una búsqueda y sustitución de una expresión regular
https://www.php.net/manual/es/function.preg-replace
*/
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);

/*
filter_var — Filtra una variable con el filtro que se indique
https://www.php.net/manual/es/function.filter-var.php

Tipos de filtros
- Filtros de validación
- Filtros de saneamiento
- Otros filtros
- Opciones de filtrado
https://www.php.net/manual/es/filter.filters.php
*/
$sanitize_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($email, FILTER_SANITIZE_NUMBER_INT);
