<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador De Número Real</h1>
        <?php 
        $num = $_POST["n"] ?? 0;
        
        echo "<p>Analisando o numero <strong> ". $num ." </strong> informado pelo usuário:</p>";

        $inteiro = (int) $num;
        $fra = $num - $inteiro;

        echo "<ul><li>A parte inteira do número é <strong>". number_format($inteiro, 0, ",", ".") ."</strong></li></ul>";
        echo "<ul><li>A parte decimal do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";

        ?>
    </main>
</body>
</html>