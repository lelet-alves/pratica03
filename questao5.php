<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Estoque - Questão 5</title>
</head>
<body>

<h2>Cadastro de Produtos com Estoque</h2>

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
    echo "<input type='submit' name='cadastrar' value='Cadastrar Produtos'>";
    echo "</form>";
}

if (isset($_POST['cadastrar']) && isset($_POST['produtos']) && isset($_POST['estoques'])) {
    $produtos = $_POST['produtos'];
    $estoques = $_POST['estoques'];

    echo "<h3>Estoque de Produtos Cadastrados:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Produto</th><th>Quantidade em Estoque</th></tr>";

    for ($i = 0; $i < count($produtos); $i++) {
        $quantidadeEstoque = intval($estoques[$i]);

        if ($quantidadeEstoque < 0) {
            echo "<tr>";
            echo "<td colspan='2' style='color:red;'>Erro: Quantidade inválida para o produto '" . htmlspecialchars($produtos[$i]) . "'</td>";
            echo "</tr>";
        } else {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($produtos[$i]) . "</td>";
            echo "<td>" . $quantidadeEstoque . "</td>";
            echo "</tr>";
        }
    }

    echo "</table>";
}
?>

</body>
</html>
