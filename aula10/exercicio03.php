<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Estados Brasileiros - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $estado = $_GET["estados"];
            switch ($estado) {
                case "Amazonas":
                case "Roraima":
                case "Amapá":
                case "Pará":
                case "Tocantins":
                case "Rondônia":
                case "Acre":
                    $regiao = "Norte";
                    break;
                case "Maranhão":
                case "Piauí":
                case "Ceará":
                case "Rio Grande do Norte":
                case "Pernambuco":
                case "Paraíba":
                case "Sergipe":
                case "Alagoas":
                case "Bahia":
                    $regiao = "Nordeste";
                    break;
                case "Mato Grosso":
                case "Mato Grosso do Sul":
                case "Goiás":
                    $região = "Centro-Oeste";
                    break;
                case "São Paulo":
                case "Rio de Janeiro":
                case "Espírito Santo":
                case "Minas Gerais":
                    $regiao = "Sudeste";
                    break;
                case "Paraná";
                case "Rio Grande do Sul";
                case "Santa Catarina";
                    $regiao = "Sul";
                    break;
            }
            echo "Você mora no estado <span class='foco'>$estado</span>, que fica na Região <span class='foco'>$regiao</span>.";
        ?>
        <p><a href="exercicio03.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>