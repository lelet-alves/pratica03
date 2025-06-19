<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 13 - Média de Despesas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Média de Despesas Mensais</h2>

    <form method="post" action="">
        <label>Digite os valores das despesas mensais (separados por vírgula):</label><br>
        <input type="text" name="despesas" placeholder="Exemplo: 1500.50, 650.75, 2400.00" required size="50"><br><br>
        <input type="submit" name="calcular" value="Calcular Média">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $entrada = $_POST['despesas'];
        $despesasMensais = array_map('floatval', array_map('trim', explode(',', $entrada)));

        if (count($despesasMensais) > 0) {
            $soma = array_sum($despesasMensais);
            $quantidade = count($despesasMensais);
            $media = $soma / $quantidade;

            echo "<h3>Resultados:</h3>";
            echo "Total de despesas: R$ " . number_format($soma, 2, ',', '.') . "<br>";
            echo "Número de meses: $quantidade<br>";
            echo "<strong>Média mensal de despesas: R$ " . number_format($media, 2, ',', '.') . "</strong>";
        } else {
            echo "<p>Insira pelo menos um valor válido.</p>";
        }
    }
    ?>
    </div>
</body>
</html>
