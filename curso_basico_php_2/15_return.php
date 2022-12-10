<?php // Return

$phrases = [
    "You will be called in to fulfill a position of high honor and responsibility.",
    "You will conquer obstacles to achieve success.",
    "Everyone agrees. You are the best.",
    "You will marry your lover.",
    "A new voyage will fill your life with untold memories.",
    "A very attractive person has a message for you",
];
/*
Aquí se ejemplifica el uso del scope de las variables dentro de PHP
para acceder a más información, por favor visitar el siguiente
link: https://www.php.net/manual/en/language.variables.scope.php
*/
function fortune_cookie()
{
    global $phrases;
    return $phrases[rand(0, count($phrases) - 1)];
}

echo (fortune_cookie() . "\n");
