<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Estruturas de Repetição While - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $c = 10;
            while ($c >= 0) {
                echo "O valor é $c <br>";
                $c -= 2;
            }
        ?>
        <p><a href="exercicio01.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>