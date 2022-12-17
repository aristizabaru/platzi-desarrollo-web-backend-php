<?php // $_FILES https://www.php.net/manual/es/function.move-uploaded-file

$img_name = basename($_FILES['image']['name']);
$temp_file = $_FILES['image']["tmp_name"];
$upload_dir = '/var/www/test/uploads/';
$upload_file = $upload_dir . $img_name;
$is_img_load = move_uploaded_file($temp_file, $upload_file);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario carga de imagen</title>
</head>

<body>
    <?php if ($is_img_load) : ?>
        <p>Tu imagen ha sido cargada con éxito</p>
        <img src="/uploads/<?= $img_name ?>">
    <?php else : ?>
        <p>Lo sentimos. Tu imagen no se ha podido cargar</p>
    <?php endif ?>
</body>

</html>