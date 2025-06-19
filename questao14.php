<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 14 - Registros de Treino</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Registros de Treino dos Alunos</h2>

    <form method="post" action="">
        <label>Quantos alunos deseja cadastrar?</label>
        <input type="number" name="quantidade" min="1" required>
        <input type="submit" name="definir" value="Definir">
    </form>

    <?php
    if (isset($_POST['definir']) && isset($_POST['quantidade'])) {
        $quantidade = intval($_POST['quantidade']);

        echo "<form method='post' action=''>";
        for ($i = 1; $i <= $quantidade; $i++) {
            echo "<h4>Aluno $i:</h4>";
            echo "Nome: <input type='text' name='nomes[]' required><br>";
            echo "Resultados de treino (separados por vírgula):<br>";
            echo "<input type='text' name='resultados[]' placeholder='Exemplo: 40,45,50' required size='40'><br><br>";
        }
        echo "<input type='submit' name='calcular' value='Calcular Médias'>";
        echo "</form>";
    }

    if (isset($_POST['calcular']) && isset($_POST['nomes'])) {
        $nomes = $_POST['nomes'];
        $resultadosAlunos = $_POST['resultados'];

        echo "<h3>Média de Resultados:</h3>";
        foreach ($nomes as $index => $nome) {
            $resultadosString = $resultadosAlunos[$index];
            $resultados = array_map('floatval', array_map('trim', explode(',', $resultadosString)));

            if (count($resultados) > 0) {
                $media = array_sum($resultados) / count($resultados);
                echo "<strong>" . htmlspecialchars($nome) . "</strong> - Média: " . number_format($media, 2, ',', '.') . "<br>";
            } else {
                echo "<strong>" . htmlspecialchars($nome) . "</strong> - Nenhum resultado informado.<br>";
            }
        }
    }
    ?>
    </div>
</body>
</html>
