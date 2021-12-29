<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Múltiplos Casos com Múltiplos Valores - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $d = isset($_GET["ds"]) ? $_GET["ds"]:0;
            switch ($d) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                default:
                    echo "Dia da semana inválido!";
            }
        ?>
        <p><a href="exercicio02.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>