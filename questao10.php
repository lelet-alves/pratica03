<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 10 - Registro de Presenças</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Registro de Presenças - Participantes Únicos</h2>

    <form method="post" action="">
        <label>Digite os nomes dos participantes (separados por vírgula):</label><br>
        <input type="text" name="nomes" placeholder="Exemplo: Ana, João, Maria, João" required size="50"><br><br>
        <input type="submit" name="enviar" value="Mostrar Participantes Únicos">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $entrada = $_POST['nomes'];

        $listaParticipantes = array_map('trim', explode(',', $entrada));

        $participantesUnicos = array_unique($listaParticipantes);

        echo "<h3>Participantes únicos:</h3>";
        echo "<ul>";
        foreach ($participantesUnicos as $nome) {
            echo "<li>" . htmlspecialchars($nome) . "</li>";
        }
        echo "</ul>";
    }
    ?>
    </div>
</body>
</html>
