<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">Conversor de Real para Dolar</h1>
    <form action="motor.php" method="get" >

        <!-- <h1>Digite o quanto deseja Converter</h1>
        <input type="text" name="inputNumberName" id="inputNumberID">
        <input type="submit" name="botaoEnviar" value="Converter"> -->


        <?php
        $valorReal = $_GET["numeroReal"];
        $real = $valorReal;
        $valorDolar = $valorReal/5.77;
        $valorDolarFinal = round($valorDolar, 2);
      
        echo "<p> O a conversao de $valorReal\$ Reais para Dolar é $valorDolarFinal . </p>";
        echo '<a href="index.html">voltar</a>';
        ?>
    </form>
</body>
</html>           