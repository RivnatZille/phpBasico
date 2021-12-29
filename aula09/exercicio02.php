<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Estrutura Aninhada - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos.";
            if ($i < 16) {
                $tipoVoto = "não vota";
            } elseif (($i >= 16 && $i <18) || ($i > 65)) {
                  $tipoVoto = "voto opcional";
            } else {
                   $tipoVoto = "voto obrigatório";
            }
            echo "<br>Para essa idade, $tipoVoto.";
        ?>
        <p><a href="exercicio02.html">Voltar</a></p>
    </div>
</body>
</html>