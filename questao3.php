<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Convidados - Questão 3</title>
</head>
<body>

<h2>Cadastro de Convidados</h2>

<form method="post" action="">
    Informe o número de convidados que deseja cadastrar: 
    <input type="number" name="quantidade" min="1" required>
    <input type="submit" name="definir" value="Definir">
</form>

<?php
if (isset($_POST['definir']) && isset($_POST['quantidade'])) {
    $quantidade = intval($_POST['quantidade']);

    echo "<form method='post' action=''>";
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "Convidado $i: <input type='text' name='convidados[]' required><br>";
    }
    echo "<input type='submit' name='cadastrar' value='Cadastrar Convidados'>";
    echo "</form>";
}

if (isset($_POST['cadastrar']) && isset($_POST['convidados'])) {
    $convidados = $_POST['convidados'];

    echo "<h3>Lista de Convidados:</h3>";
    echo "<ul>";
    foreach ($convidados as $nome) {
        echo "<li>" . htmlspecialchars($nome) . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
