<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Tabuada - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = $_GET["select"];
            echo "<h2>Exibindo a Tabuada de $valor</h2>";
            $cont = 1;
            do {
                echo "$valor x $cont = ". ($valor * $cont). "<br>";
                $cont++;
            } while ($cont <= 10);
        ?>
        <p><a href="exercicio03.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>