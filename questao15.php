<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 15 - Melhor Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Melhor Resultado de Cada Aluno</h2>

    <form method="post" action="">
        <label>Quantos alunos deseja cadastrar?</label>
        <input type="number" name="quantidade_alunos" min="1" required>
        <input type="submit" name="definir_quantidade" value="Definir">
    </form>

    <?php
    if (isset($_POST['definir_quantidade']) && isset($_POST['quantidade_alunos'])) {
        $quantidadeAlunos = intval($_POST['quantidade_alunos']);

        echo "<form method='post' action=''>";
        for ($i = 1; $i <= $quantidadeAlunos; $i++) {
            echo "<h4>Aluno $i:</h4>";
            echo "Nome: <input type='text' name='nomes[]' required><br>";
            echo "Resultados de treino (separados por vírgula):<br>";
            echo "<input type='text' name='resultados[]' placeholder='Exemplo: 50,55,60' required size='40'><br><br>";
        }
        echo "<input type='submit' name='calcular_melhores' value='Mostrar Melhor Resultado'>";
        echo "</form>";
    }

    if (isset($_POST['calcular_melhores']) && isset($_POST['nomes'])) {
        $nomesAlunos = $_POST['nomes'];
        $resultadosAlunos = $_POST['resultados'];

        echo "<h3>Melhor Resultado de Cada Aluno:</h3>";
        foreach ($nomesAlunos as $index => $nomeAluno) {
            $resultadosString = $resultadosAlunos[$index];
            $resultadosIndividuais = array_map('floatval', array_map('trim', explode(',', $resultadosString)));

            if (count($resultadosIndividuais) > 0) {
                $melhorResultado = max($resultadosIndividuais);
                echo "<strong>" . htmlspecialchars($nomeAluno) . "</strong> - Melhor resultado: $melhorResultado<br>";
            } else {
                echo "<strong>" . htmlspecialchars($nomeAluno) . "</strong> - Nenhum resultado informado.<br>";
            }
        }
    }
    ?>
    </div>
</body>
</html>
