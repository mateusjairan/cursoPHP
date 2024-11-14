<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $getNome = $_GET["nome"] ?? "Sem nome";
        $getSobrenome = $_GET["sobrenome"] ?? "Desconhecido";

        echo "<p> Olá $getNome $getSobrenome, é um prazer te conhecer.";
        ?>
    </main>
</body>
</html>