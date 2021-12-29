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
            $a = 10;
            $b = "10";
            if ($a == $b) {
                print "caso 1";
            } else {
                print "caso 2";
            }
            if ($a === $b) {
                print "caso 3";
            } else {
                print "caso 4";
            }
        ?>
        <!-- <p><a href="#" class="botao">Voltar</a></p> -->
    </div>
</body>
</html>