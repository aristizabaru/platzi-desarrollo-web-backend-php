<?php // Switch

/*
Si bien la estructura swtich hace parte de la referencia del lenguaje
es buena práctica usar un array asociativo en lugar de estas
*/

$tipo_comida = "asiatica";

switch ($tipo_comida) {
    case 'italiana':
        echo "Pizza";
        break;
    case 'asiatica':
        echo "Ramen";
        break;
    case 'colombiana':
        echo "Bandeja Paisa";
        break;
    default:
        echo "No tengo sugerencias";
        break;
}

echo "\n";
