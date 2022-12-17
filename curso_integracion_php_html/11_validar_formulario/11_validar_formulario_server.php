<?php // Validar formulario

/*
La primera validación que se debe hacer es determinar si la variable
está definida, para esto se puede usar la función integrada de
manejo de variables isset()

isset — Determina si una variable está definida y no es null
retornando un boleano

La segunda validación que se hace es determinar que la variable
no este vacía

empty — Determina si una variable está vacía retornando un boleano
*/
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    echo "Tu nombre es {$_POST['nombre']}";
} else {
    echo "Error. No enviaste un nombre";
}
