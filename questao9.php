<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 9 - Consolidação de IDs</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Consolidação de IDs (Sem Duplicatas)</h2>

    <form method="post" action="">
        <h3>Fonte A - Digite os IDs separados por vírgula:</h3>
        <input type="text" name="fonteA" placeholder="Exemplo: 101,105,102" required>

        <h3>Fonte B - Digite os IDs separados por vírgula:</h3>
        <input type="text" name="fonteB" placeholder="Exemplo: 103,101,106" required>

        <br><br>
        <input type="submit" name="enviar" value="Consolidar IDs">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $inputFonteA = $_POST['fonteA'];
        $inputFonteB = $_POST['fonteB'];

        $idsFonteA = array_map('trim', explode(',', $inputFonteA));
        $idsFonteB = array_map('trim', explode(',', $inputFonteB));

        $todosIds = array_merge($idsFonteA, $idsFonteB);

        $todosIdsUnicos = array_unique($todosIds);

        echo "<h3>Todos os IDs (sem duplicatas):</h3>";
        echo "<ul>";
        foreach ($todosIdsUnicos as $id) {
            echo "<li>" . htmlspecialchars($id) . "</li>";
        }
        echo "</ul>";
    }
    ?>
    </div>
</body>
</html>

