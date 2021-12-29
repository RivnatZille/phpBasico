<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Arrays com Chaves Associativas - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array( "nome" => "Lucas",
                        "idade" => 26,
                        "peso" => 68.8);
            $v["fuma"] = false;
            foreach($v as $k => $c) {
                echo "O campo $k possui o conteúdo $c <br>";
            }
        ?>
        </pre>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>