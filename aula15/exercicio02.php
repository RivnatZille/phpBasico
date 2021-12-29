<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Rotinas Externas - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            include "exercicio02_funcoes.php";
            echo "<h1>Testando novas funções</h1>";
            ola();
            mostraValor(4);
            echo "<h2>Finalizando Programa</h2>";
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>