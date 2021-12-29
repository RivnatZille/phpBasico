<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Tabuada Estrutura For - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <form method="get" action="exercicio02_tabuada.php">
            <select name="num">
                <?php
                    for ($c = 1; $c <= 10; $c++) {
                        echo "<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>
        <?php

        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>