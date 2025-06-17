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

    <?php
    $despesasMensais = [1200.50, 850.75, 1500.00, 920.30, 1100.20];

    $soma = array_sum($despesasMensais);

    $quantidade = count($despesasMensais);

    $media = $soma / $quantidade;

    echo "Total de despesas: R$ " . number_format($soma, 2, ',', '.') . "<br>";
    echo "Número de meses: $quantidade<br>";
    echo "<strong>Média mensal de despesas: R$ " . number_format($media, 2, ',', '.') . "</strong>";
    ?>
    </div>
</body>
</html>
