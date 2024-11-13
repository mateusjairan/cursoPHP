<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Strings no PHP</h1>
    <?php
    $nome = "Mateus";
    $sobrenome = "Rodrigues";
    $apelido = "Janjan";
    echo "Olá $nome \"$apelido\" $sobrenome  <br>";

    echo "Olá $nome  \u{1F525} <br>";

    const ESTADO = "Ceará";
    echo "Moro no " . ESTADO;

    ?>
    
</body>
</html>