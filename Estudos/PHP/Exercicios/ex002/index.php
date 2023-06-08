<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h1>Exemplo de PHP</h1>
        <?php
             date_default_timezone_set("America/sao_paulo");
             echo "hoje é dia " . date("d/m") . "<br>";
             echo "e a hora atual é " . date("G:i:s")
        ?>
    </main>
</body>
</html>