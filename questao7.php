<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 7 - Precificação de Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Lista de Produtos por Preço (Ordem Crescente)</h2>

    <?php
    $precosProdutos = [
        "Arroz"     => 29.90,
        "Feijão"    => 6.50,
        "Macarrão"  => 2.30,
        "Café"      => 15.90,
        "Açúcar"    => 4.80
    ];

    asort($precosProdutos);

    foreach ($precosProdutos as $produto => $preco) {
        echo "Produto: $produto - Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
    }
    ?>
    </div>
</body>
</html>
