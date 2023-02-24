<?php // Parámetros por valor y referencia

// Valor

function greet($name)
{
    return "Hola $name";
}

echo greet("Andrés");
echo "</br>";


// Referencia
$course = "PHP";

/**
 * Usando el operador & en el parámetro de una función se indica que este será
 * pasado por referencia y no por valor.
 * 
 * Hay que tener cuidado con esta práctica ya que puede afectar la lectura
 * del código
 */
function path(&$course)
{
    $course = "Laravel";
    echo $course;
}

path($course);
echo "</br>";
echo $course;
