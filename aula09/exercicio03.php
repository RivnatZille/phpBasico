<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Média do Aluno - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $media = ($nota1 + $nota2) / 2;
            if ($media < 5) {
                $sitAluno = "REPROVADO";
            } elseif ($media >= 5 && $media < 7) {
                $sitAluno = "RECUPERAÇÃO";
            } else {
                $sitAluno = "APROVADO";
            }
            echo "A média entre $nota1 e $nota2 é igual a $media. <br>";
            echo "Situação do Aluno: $sitAluno"
        ?>
        <p><a href="exercicio03.html">Voltar</a></p>
    </div>
</body>
</html>