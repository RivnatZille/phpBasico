<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Personalização de Texto - PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <p><a href="ex03-exercicio.html">Voltar</a></p>
    </div> 
</body>
</html>