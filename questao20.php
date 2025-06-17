<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 20 - Sistema de Inventário</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <div class="container">
    <h2>Sistema de Inventário</h2>

    <?php
    $inventario = [
        'notebook' => 20,
        'mouse' => 50,
        'teclado' => 30
    ];

    if (!array_key_exists('monitor', $inventario)) {
        $inventario['monitor'] = 15; 
    }

    if (array_key_exists('notebook', $inventario)) {
        $inventario['notebook'] += 5;
    }

    echo "<h3>Inventário Atualizado:</h3>";
    echo "<ul>";
    foreach ($inventario as $produto => $quantidade) {
        echo "<li>" . ucfirst($produto) . ": " . $quantidade . " unidades</li>";
    }
    echo "</ul>";
    ?>
    </div>
</body>
</html>

