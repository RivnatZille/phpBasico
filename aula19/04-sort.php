<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - sort - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");
            print_r($v);
            krsort($v);
            print_r($v);
        ?>
        </pre>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>