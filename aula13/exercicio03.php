<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $numero = $_GET["numero"];
            $totalMult = 0;
            echo "Analisando o valor <span class='foco'>$numero</span>...<br>";
            echo "Valores múltiplos: ";
            for ($cont = 1; $cont <= $numero; $cont++) {
                if ($numero % $cont == 0) {
                    $teste = $cont;
                    echo "$teste ";
                    $totalMult++;
                }
            }
            echo "<br>Total de Múltiplos: $totalMult";
            if ($totalMult == 2) {
                $primo = "é Primo";
            } elseif ($totalMult >= 3) {
                $primo = "não é Primo";
            }
            echo "<br>Resultado: <span class='foco'>$numero $primo</span>!"
        ?>
        <p><a href="exercicio03.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>