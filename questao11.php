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

    <form method="post" action="">
        <label>Digite as temperaturas registradas (separadas por vírgula):</label><br>
        <input type="text" name="temperaturas" placeholder="Exemplo: 22.5, 25.3, 19.8, 30.1" required size="50"><br><br>
        <input type="submit" name="calcular" value="Calcular Máxima e Mínima">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $entrada = $_POST['temperaturas'];

        $temperaturasDiarias = array_map('floatval', array_map('trim', explode(',', $entrada)));

        if (count($temperaturasDiarias) > 0) {
            $maxima = max($temperaturasDiarias);
            $minima = min($temperaturasDiarias);

            echo "<h3>Resultados:</h3>";
            echo "Temperatura máxima registrada: <strong>$maxima °C</strong><br>";
            echo "Temperatura mínima registrada: <strong>$minima °C</strong>";
        } else {
            echo "<p>Insira pelo menos uma temperatura válida.</p>";
        }
    }
    ?>
    </div>
</body>
</html>
