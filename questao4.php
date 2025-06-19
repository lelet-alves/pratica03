<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos - Questão 4</title>
</head>
<body>

<h2>Cadastro de Produtos e Preços</h2>

<form method="post" action="">
    Informe quantos produtos deseja cadastrar: 
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
        echo "Preço: <input type='number' step='0.01' name='precos[]' required><br><br>";
    }
    echo "<input type='submit' name='cadastrar' value='Cadastrar Produtos'>";
    echo "</form>";
}

if (isset($_POST['cadastrar']) && isset($_POST['produtos']) && isset($_POST['precos'])) {
    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];

    echo "<h3>Lista de Produtos Cadastrados:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Produto</th><th>Preço (R$)</th></tr>";

    for ($i = 0; $i < count($produtos); $i++) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($produtos[$i]) . "</td>";
        echo "<td>R$ " . number_format(floatval($precos[$i]), 2, ',', '.') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
