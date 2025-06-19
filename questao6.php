<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos com Filtro - Questão 6</title>
</head>
<body>

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
    echo "<input type='submit' name='cadastrar' value='Cadastrar Produtos'>";
    echo "</form>";
}

if (isset($_POST['cadastrar']) && isset($_POST['produtos']) && isset($_POST['estoques'])) {
    $produtos = $_POST['produtos'];
    $estoques = $_POST['estoques'];

    echo "<h3>Filtrar Produtos:</h3>";
    echo "<form method='post' action=''>";
    echo "<input type='hidden' name='produtos_serial' value='" . htmlspecialchars(serialize($produtos)) . "'>";
    echo "<input type='hidden' name='estoques_serial' value='" . htmlspecialchars(serialize($estoques)) . "'>";

    echo "Buscar por nome: <input type='text' name='filtro_nome'><br>";
    echo "Estoque mínimo: <input type='number' name='filtro_estoque' min='0'><br><br>";
    echo "<input type='submit' name='filtrar' value='Aplicar Filtros'>";
    echo "</form>";

    echo "<h3>Lista Completa de Produtos:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Produto</th><th>Estoque</th></tr>";
    foreach ($produtos as $i => $nome) {
        echo "<tr><td>" . htmlspecialchars($nome) . "</td><td>" . intval($estoques[$i]) . "</td></tr>";
    }
    echo "</table>";
}

if (isset($_POST['filtrar']) && isset($_POST['produtos_serial']) && isset($_POST['estoques_serial'])) {
    $produtos = unserialize($_POST['produtos_serial']);
    $estoques = unserialize($_POST['estoques_serial']);

    $filtroNome = isset($_POST['filtro_nome']) ? strtolower($_POST['filtro_nome']) : '';
    $filtroEstoque = isset($_POST['filtro_estoque']) ? intval($_POST['filtro_estoque']) : 0;

    echo "<h3>Resultado do Filtro:</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Produto</th><th>Estoque</th></tr>";

    $encontrou = false;
    foreach ($produtos as $i => $nome) {
        $quantidade = intval($estoques[$i]);
        $nomeMin = strtolower($nome);

        $passaNome = ($filtroNome == '' || strpos($nomeMin, $filtroNome) !== false);
        $passaEstoque = ($quantidade >= $filtroEstoque);

        if ($passaNome && $passaEstoque) {
            echo "<tr><td>" . htmlspecialchars($nome) . "</td><td>" . $quantidade . "</td></tr>";
            $encontrou = true;
        }
    }

    if (!$encontrou) {
        echo "<tr><td colspan='2'>Nenhum produto encontrado com os filtros aplicados.</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
