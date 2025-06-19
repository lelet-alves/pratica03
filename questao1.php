<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto - Questão 1</title>
</head>
<body>

<h2>Cadastro de Produto</h2>

<form method="post" action="">
    Nome do Produto: <input type="text" name="nome" required><br><br>
    SKU: <input type="text" name="sku" required><br><br>
    <input type="submit" value="Cadastrar Produto">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sku = $_POST['sku'];

    echo "<h3>Produto Cadastrado:</h3>";
    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "SKU: " . htmlspecialchars($sku) . "<br>";
}
?>

</body>
</html>