<?php // Closure

$greet = function ($name) // Variable que requiere lógica
{
    return "Hola $name";
};

echo $greet("Andrés");

echo "<br/>";

function greetClosure(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) {
    return "Hola, $name";
};

$en = function ($name) {
    return "Hello, $name";
};

echo greetClosure($es, "Andrés");
echo "<br/>";
echo greetClosure($en, "Andrés");
