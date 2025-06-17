<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 18 - Filtragem de Dados de Sensor</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <div class="container">
    <h2>Filtragem de Dados de Sensor</h2>

    <?php
    $dadosSensor = [15.2, 28.9, 12.0, 35.5, 20.1, 40.0, 5.8];

    $leiturasFiltradas = array_filter($dadosSensor, function($valor) {
        return $valor > 25.0;
    });

    echo "<h3>Leituras acima de 25.0:</h3>";
    echo "<pre>";
    print_r($leiturasFiltradas);
    echo "</pre>";
    ?>
    </div>
</body>
</html>
