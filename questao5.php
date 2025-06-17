<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 5 - Monitoramento Ambiental</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Espécies Observadas</h2>

    <?php
    $especiesObservadas = ['Beija-flor', 'Canário', 'Bem-te-vi', 'Sabiá', 'Beija-flor', 'Coruja'];

    if (in_array("Pardal", $especiesObservadas)) {
        echo "A espécie <strong>Pardal</strong> já foi registrada.<br><br>";
    } else {
        echo "A espécie <strong>Pardal</strong> <span style='color: red;'>não foi registrada</span>.<br><br>";
    }

    $especiesUnicas = array_unique($especiesObservadas);

    echo "<strong>Espécies únicas registradas:</strong><br>";
    foreach ($especiesUnicas as $especie) {
        echo "- $especie<br>";
    }
    ?>
    </div>
</body>
</html>