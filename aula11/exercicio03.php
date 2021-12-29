<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Contador Dinâmico - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $inicio = $_GET["inicio"];
            $fim = $_GET["fim"];
            $incremento = $_GET["incremento"];

            if ($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "$inicio ";
                    $inicio += $incremento;
                }
            } elseif ($inicio > $fim) {
                while ($inicio >= $fim) {
                    echo "$inicio ";
                    $inicio -= $incremento;
                }
            }   
        ?>
        <p><a href="exercicio03.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>