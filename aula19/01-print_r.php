<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - print_r e var_dump- PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array("A", "J", "M", "X", "K");
            print_r($v);
            // var_dump($v);
            echo "O vetor tem " . count($v) . " elementos.";
        ?>
        </pre>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>