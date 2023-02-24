<?php // Expresiones regulares

/**
 * Expresiones regulares
 * En este archivo se explican las bases del manejo de expresiones regulares,
 * aquí se listan algunos de los símbolos que se usan regularmente:
 * / -> contenedor
 * ^ -> debe iniciar con el patron que se anexa
 * $ -> debe terminar con el patron que se anexa
 * - -> define un rango
 * [] -> define un patron
 * {} -> define condiciones
 * 
 * Para ampliar la información se puede tomar el curso de expresiones regulares
 * https://platzi.com/cursos/expresiones-regulares/
 */

$password = '12345623';
// preg_match -> Realiza una comparación con una expresión regular
/**
 * La expresión regular /^[0-9]{6,9}$/ indica que la cadena tenga un patron
 * de números de 0 a 9 y que como condición debe tener mínimo 6 y máximo 9
 */
echo preg_match('/^[0-9]{6,9}$/', $password);
