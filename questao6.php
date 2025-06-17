<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 6 - Categorias de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Lista de Categorias</h2>

    <?php
    $categoriasProdutos = [
        "Eletrônicos",
        "Roupas",
        "Livros",
        "Móveis",
        "Beleza"
    ];

    $categoriasOrdemCrescente = $categoriasProdutos;
    sort($categoriasOrdemCrescente);
    echo "<strong>Ordem Alfabética:</strong><br>";
    foreach ($categoriasOrdemCrescente as $categoria) {
        echo "- $categoria<br>";
    }

    echo "<br>";

    $categoriasOrdemDecrescente = $categoriasProdutos;
    rsort($categoriasOrdemDecrescente);
    echo "<strong>Ordem Alfabética Decrescente:</strong><br>";
    foreach ($categoriasOrdemDecrescente as $categoria) {
        echo "- $categoria<br>";
    }
    ?>
    </div>
</body>
</html>