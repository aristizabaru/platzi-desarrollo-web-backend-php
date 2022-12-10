<?php // Funciones

function get_pokemon()
{
    // rand retorna un número aleatorio entre dos valores
    $num_aleatorio = rand(1, 5);
    switch ($num_aleatorio) {
        case 1:
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
            break;
        default:
            echo "Lo siento, no hay pokemon para ti";
    }
    echo "\n";
}

get_pokemon();
