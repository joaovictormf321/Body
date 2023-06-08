<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo novas tags de formularios</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
            
    <?php 
        date_default_timezone_set("america/sao_paulo");
        $dia = date('Y-m-d');
        $hoje = date('Y-m');
    ?>
    <main>
        <h1>Teste de formularios</h1>
        <form action="cadastro.php" method="post" autocomplete="on">
            <p><label for="inome">Nome:</label>
            <input type="text" name="" id="inome" required maxlength="40" minlength="5" placeholder="Nome completo"
            autocomplete="name"></p>
            <p>
                <label for="imedia">Média:</label>
                <input type="number" value="5" name="media" id="imedia" required min="0" max="10" placeholder="0 a 10" autocomplete="num" step="0.1">
            </p>
            <p>
                <label for="imes">Périodo letivo:</label>
                <input type="month" require name="" id="imes" value="<?php echo $hoje ?>" >
            </p>
            <p>
                <label for="idia">Data:</label>
                <input type="date" require name="dia" id="idia" value="<?php echo $dia?>">
            </p>
            <p>
                <label for="ihora">Horario:</label>
                <input type="time" name="" id="ihora" require value="10-10">
            </p>
            <div class="painel">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </main>
    <button onclick="window.print()">Print this page</button>
</body>
</html>