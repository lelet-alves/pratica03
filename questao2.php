<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Notas - Questão 2</title>
</head>
<body>

<h2>Cadastro de Notas por Disciplina</h2>

<form method="post" action="">
    Nome da Disciplina: <input type="text" name="disciplina" required><br><br>
    
    Nota 1: <input type="number" name="notas[]" step="0.01" required><br>
    Nota 2: <input type="number" name="notas[]" step="0.01" required><br>
    Nota 3: <input type="number" name="notas[]" step="0.01" required><br>
    Nota 4: <input type="number" name="notas[]" step="0.01" required><br><br>
    
    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $disciplina = $_POST['disciplina'];
    $notas = $_POST['notas'];

    $soma = array_sum($notas);
    $media = $soma / count($notas);

    echo "<h3>Resultado:</h3>";
    echo "Disciplina: " . htmlspecialchars($disciplina) . "<br>";
    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Média: " . number_format($media, 2, ',', '.') . "<br>";
}
?>

</body>
</html>
