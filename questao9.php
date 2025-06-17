<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 9 - Consolidação de IDs</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>IDs Consolidados (Sem Duplicatas)</h2>

    <?php
    $idsFonteA = [101, 105, 102];
    $idsFonteB = [103, 101, 106];

    $todosIds = array_merge($idsFonteA, $idsFonteB);

    $todosIdsUnicos = array_unique($todosIds);

    echo "<strong>Todos os IDs (sem duplicatas):</strong><br>";
    foreach ($todosIdsUnicos as $id) {
        echo "- $id<br>";
    }
    ?>
    </div>
</body>
</html>
