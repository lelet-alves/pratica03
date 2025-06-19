<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Soma Total de Estoques - Questão 7</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    </div class="container">
<h2>Cadastro de Produtos</h2>

<form method="post" action="">
    Quantos produtos deseja cadastrar?
    <input type="number" name="quantidade" min="1" required>
    <input type="submit" name="definir" value="Definir">
</form>

<?php
if (isset($_POST['definir']) && isset($_POST['quantidade'])) {
    $quantidade = intval($_POST['quantidade']);

    echo "<form method='post' action=''>";
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "<h4>Produto $i:</h4>";
        echo "Nome: <input type='text' name='produtos[]' required><br>";
        echo "Quantidade em estoque: <input type='number' name='estoques[]' min='0' required><br><br>";
    }
    echo "<input type='submit' name='calcular' value='Calcular Total de Estoques'>";
    echo "</form>";
}

if (isset($_POST['calcular']) && isset($_POST['estoques'])) {
    $estoques = $_POST['estoques'];
    $total = 0;

    foreach ($estoques as $quantidade) {
        $total += intval($quantidade);
    }

    echo "<h3>Total de Estoques: $total unidades</h3>";

    echo "<h3>Produtos Cadastrados:</h3>";
    echo "<ul>";
    foreach ($_POST['produtos'] as $i => $nome) {
        echo "<li>" . htmlspecialchars($nome) . ": " . intval($estoques[$i]) . " unidades</li>";
    }
    echo "</ul>";
}
?>
    </div>
</body>
</html>
