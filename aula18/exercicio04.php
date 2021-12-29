<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Arrays com Chaves Personalizadas - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
        <?php
            $v = array(3 => 5, 1 => 9, 0 => 8, 7 => 7);
            unset($v[0]);
            print_r($v);
        ?>
        </pre>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>