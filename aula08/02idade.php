<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Formulário Pessoa - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
            $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
            $idade = date("Y") - $ano;
            echo "$nome é $sexo e tem $idade anos.";
        ?>
        <p><a href="ex02-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>