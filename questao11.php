<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 11 - Monitoramento de Sensores</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Temperaturas Registradas</h2>

    <?php
    $temperaturasDiarias = [22.5, 25.3, 19.8, 30.1, 27.0, 21.6, 23.9];

    $maxima = max($temperaturasDiarias);
    $minima = min($temperaturasDiarias);

    echo "Temperatura máxima registrada: <strong>$maxima °C</strong><br>";
    echo "Temperatura mínima registrada: <strong>$minima °C</strong>";
    ?>
    </div>
</body>
</html>
