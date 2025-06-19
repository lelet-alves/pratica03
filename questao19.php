<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 19 - Gestão de Fila de Atendimento</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Gestão de Fila de Atendimento</h2>

    <form method="post" action="">
        <label>Digite os nomes da fila atual (separados por vírgula):</label><br>
        <input type="text" name="fila_atual" required size="60"><br><br>

        <label>Adicionar nome no início da fila:</label><br>
        <input type="text" name="inicio" required><br><br>

        <label>Adicionar nome no final da fila:</label><br>
        <input type="text" name="fim" required><br><br>

        <input type="submit" name="atualizar_fila" value="Atualizar Fila">
    </form>

    <?php
    if (isset($_POST['atualizar_fila']) && isset($_POST['fila_atual']) && isset($_POST['inicio']) 
    && isset($_POST['fim'])) {
        $filaTexto = $_POST['fila_atual'];
        $inicio = trim($_POST['inicio']);
        $fim = trim($_POST['fim']);

        $filaAtendimento = array_map('trim', explode(',', $filaTexto));

        array_unshift($filaAtendimento, $inicio);
        array_push($filaAtendimento, $fim);

        echo "<h3>Fila de Atendimento Atualizada:</h3>";
        echo "<ul>";
        foreach ($filaAtendimento as $paciente) {
            echo "<li>" . htmlspecialchars($paciente) . "</li>";
        }
        echo "</ul>";
    }
    ?>
    </div>
</body>
</html>
