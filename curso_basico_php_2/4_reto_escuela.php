<?php // Reto escuela

/*
Enunciado
Componer un arreglo que tenga personas, cada persona debe tener nombre,
ocupación y comidas. Las comidas deben estar subdivididas en comidas
que favoritas y que no les gusta
*/

$personas = [
    [
        "nombre" => "Andrés Aristizábal",
        "ocupacion" => "Desarrollador",
        "comidas" => [
            "favoritas" => "Hamburguesas y Ramen",
            "no_favoritas" => "Mondongo"
        ]
    ],
    [
        "nombre" => "Juliana Lopera",
        "ocupacion" => "Publicista",
        "comidas" => [
            "favoritas" => "Pasta",
            "no_favoritas" => "Frijoles"
        ]
    ],
    [
        "nombre" => "Daniela Ramirez",
        "ocupacion" => "Ing. Química",
        "comidas" => [
            "favoritas" => "Carne",
            "no_favoritas" => "Frijoles"
        ]
    ]
];

echo "La comida favorita de {$personas[0]['nombre']} es {$personas[0]['comidas']['favoritas']}\n";
echo "La comida favorita de {$personas[1]['nombre']} es {$personas[1]['comidas']['favoritas']}\n";
echo "La comida favorita de {$personas[2]['nombre']} es {$personas[2]['comidas']['favoritas']}\n";
