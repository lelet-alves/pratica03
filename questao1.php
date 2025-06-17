<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 1 - Gerenciamento de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    </div class="container">
    <h2>Lista de produtos cadastrados</h2>

    <?php
    $produtos = [
        ["nome" => "Smartphone XYZ", "sku" => "SKU001"],
        ["nome" => "Notebook Ultra", "sku" => "SKU002"],
        ["nome" => "Fone de Ouvido Pro", "sku" => "SKU003"],
        ["nome" => "Câmera Digital ZoomX", "sku" => "SKU004"],
        ["nome" => "Smartwatch FitLife", "sku" => "SKU005"]
    ];

    foreach ($produtos as $produto) {
        echo "Produto: " . $produto["nome"] . " - SKU: " . $produto["sku"] . "<br>";
    }
    ?>
    </div>
</body>
</html>