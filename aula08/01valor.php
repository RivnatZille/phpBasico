<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 - Formulário - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $valor = $_GET["v"];
            $rq = sqrt($valor);
            echo "O valor enviado foi $valor";
            echo "<br>A raiz quadrada de $valor é igual a ". number_format($rq, 2);
        ?>
        <p><a href="ex01-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>