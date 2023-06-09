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
    <header>
            <h1>Novos campos</h1>
    </header>
    <main>
        <p>Estudando novos campos de formularios,
            no <strong>html5</strong>, foi adicionado muitas coisas novas, dando varias novas oportunidades para a criação de um site mais <strong>bonito</strong>, <strong>semantico</strong> e <strong>responsivo</strong>, uma dessas coisa foi a adição de novo campos de formularios, hoje eu estudei quatro desses novos campos.
        </p>
        <article class="code">
            <iframe src="code/code.txt" frameborder="0"></iframe>
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
        </article>
        <article class="main">
            <p>Com esses novos campos de formularios, sera possivel colocar no formularios Numeros, dia, mes, ano e hora, isso que não era tão facil antas.</p>
            <section>
                <ul>
                    <li><strong>number</strong>:O contrle <strong>Number</strong> é usado para colocar numeros.</li>
                    <li><strong>month</strong>: Esse essa tag cria um campo para colocar mes e ano.</li>
                    <li><strong>date</strong>:Essa tag coloca dia, mes e ano.</li>
                    <li><strong>time</strong>:Usado para colocar hora.</li>
                </ul>
            </section>
            
        </article>
        <h2>Observação</h2>
        <p>Cada um desses novos controles pode ser colocado atributos especias, alguns atributos que pode usar em um controle e não no outro.</p>
        <ul>
            <li><strong>min</strong>:Esse atributo pode ser usado no campo <strong>number</strong>, ele serve para defiir o valor minimo qui pode ser coloca dentro do campo numerico.</li>
            <li><strong>max</strong>:Esse atributp pode ser tambem usado no capo <strong>number</strong>, ele serve para definir o valor maximo do campo numerioco.</li>
            <li><strong>value</strong>:Esse atributo pode ser usado no <strong>number</strong>, ele server papa deixa um texto dendro do campo wuando o site for carregado. O <strong>value</strong>, tambem pode ser usado nos campos <strong>month</strong> e <strong>date</strong>, porem eles so pode colocar anbas os nomeros e o sinal de menos. O value no <strong>month</strong>, serve para deixar marcado uma data, porem ele so funciona com o ano e o mes (2007-07), ele primeiro tem que colocar o ano, depois o mespara funcionar, já o <strong>date</strong>, funciona da mesma forma, a unica diferença e que tem o dia (2007-07-17) com o ano primeiro, o mes no meio e o dia no ultimo.</li>
            <li><strong>step</strong>:Esse atributo pode ser usado no <strong>number</strong>, atributo step especifica o intervalo entre números válidos em um elemento input . Exemplo: se step="3" , os números legais podem ser -3, 0, 3, 6, etc.</li>
        </ul>
    </main>
    <footer>
        <p>Dev <a href="../../../../../index/index.html"><Strong>João victor M</Strong></a></p>
    </footer>
</body>
</html>