<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
</head>
<body>
    <main>
        <pre>
            <?php 
            echo "<h1>SuperGlobal GET</h1>";

            var_dump($_GET);

            echo "<h1>SuperGlobal POST</h1>";

            var_dump($_POST);

            echo "<h1>SuperGlobal REQUEST</h1>";

            var_dump($_REQUEST);
            ?>
        </pre>
    </main>
</body>
</html>