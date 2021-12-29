<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Soma com Múltiplos Parâmetros - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma() {
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for ($i = 0; $i < $t; $i++) {
                    $s += $p[$i];
                    echo "$p[$i] ";
                }
                return $s;
            }
            $r = soma(3, 5, 2, 8, 9, 4, 16, 10, 22);
            echo "<p>A soma dos valores é $r</p>";
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>