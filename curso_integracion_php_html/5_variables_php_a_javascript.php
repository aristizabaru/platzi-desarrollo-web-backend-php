<?php
$users = [
    [
        "id" => 1,
        "name" => "Andrés"
    ],
    [
        "id" => 2,
        "name" => "Juliana"
    ],
    [
        "id" => 3,
        "name" => "Daniela"
    ]
];

$num_usuarios = 10;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables PHP a Javascript</title>
</head>

<body>

</body>
<!-- Esto no es una buena práctica -->
<script>
    /*
        El objto es enviado desde PHP por medio del uso de la función json_encode
        que serializa el objeto retornando un string, que a su vez se imprime del
        lado del servidor en el método de la clase JSON que lo deserializa
        en Javascript recuperando el objeto para su ejecución en el cliente
    */
    let users = JSON.parse('<?= json_encode($users) ?>');
    console.log(users);
    //  Esta técnica funciona también con valores sencillos
    let numUsuarios = parseInt('<?= $num_usuarios ?>');
    console.log(numUsuarios);
</script>

</html>