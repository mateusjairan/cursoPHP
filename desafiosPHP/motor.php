<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $pegaNumero = $_GET["caixa"];
    $antecessor = $pegaNumero-1;
    $sucessor = $pegaNumero+1;
    echo "<form>
    <p> O numero que antecede $pegaNumero é $antecessor <br>
     e o que o sucede é $sucessor
    </form>";

    ?>
</body>
</html>