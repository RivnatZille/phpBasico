<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - printf - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $p = "Leite";
            $pr = 4.5;
            printf("O %s custa $ %.2f", $p, $pr);
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>