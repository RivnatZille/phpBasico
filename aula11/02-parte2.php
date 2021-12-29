<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Repetição While - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
                $i++;
            }

            $i = 1;
            while ($i <= 5) {
                $v = "num".$i;
                echo "Valor $i : " . $$v . "<br>";
                $i++;
            }
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>