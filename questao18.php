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

    <form method="post" action="">
        <label>Digite os valores das leituras do sensor (separados por vírgula):</label><br>
        <input type="text" name="leituras" placeholder="Exemplo: 15.2,28.9,12.0,35.5,20.1,40.0,5.8" required size="60"><br><br>

        <label>Digite o valor limite para filtragem:</label><br>
        <input type="number" name="limite" step="0.1" placeholder="Exemplo: 25.0" required><br><br>

        <input type="submit" name="filtrar" value="Filtrar Leituras">
    </form>

    <?php
    if (isset($_POST['filtrar']) && isset($_POST['leituras']) && isset($_POST['limite'])) {
        $leiturasTexto = $_POST['leituras'];
        $limite = floatval($_POST['limite']);

        $dadosSensor = array_map('floatval', array_map('trim', explode(',', $leiturasTexto)));

        $leiturasFiltradas = array_filter($dadosSensor, function($valor) use ($limite) {
            return $valor > $limite;
        });

        echo "<h3>Leituras acima de $limite:</h3>";
        echo "<pre>";
        print_r($leiturasFiltradas);
        echo "</pre>";
    }
    ?>
    </div>
</body>
</html>
