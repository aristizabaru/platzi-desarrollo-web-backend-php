<?php // reto ¿puedo retirar mis donaciones de Twitch?

/*
Enunciado
Preguntar al streamer cuánto dinero tiene y si el valor es mayor que 100 dólares
se le puede permitir el retiro
*/

$donaciones = readline("¿Cuánta cantidad donada tienes en Twitch?: ");

if (intval($donaciones) >= 100)
    print("Tu retiro está en proceso..");
else
    print("Solo puedes retirar cuando tus donaciones llegan a $100 USD");
echo "\n";
