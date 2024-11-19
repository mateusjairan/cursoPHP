<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número de 1 a 100</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="motor.php" method="post">
        <h1>Gerador de Número Aleatorio</h1>
        <p>Aperte o botão para gerar um número de 1 até 100</p>
        <?php 
        // $gerador = $_POST["botao"];
        $geradorAtivo = rand(0,100);
        echo $geradorAtivo;
        ?>
        <input type="submit" value="Gerar"><a href="index.html">Voltar</a>
    </form>
</body>
</html>