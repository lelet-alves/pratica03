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

    <?php
    $registrosTreino = [
        ["nome" => "Lelet", "resultados" => [40, 45, 50]],
        ["nome" => "Ana", "resultados" => [30, 35, 38]],
        ["nome" => "Italo", "resultados" => [55, 60, 58]]
    ];

    foreach ($registrosTreino as $aluno) {
        $nome = $aluno["nome"];
        $resultados = $aluno["resultados"];
        $media = array_sum($resultados) / count($resultados);

        echo "<strong>$nome</strong> - Média dos resultados: " . number_format($media, 2, ',', '.') . "<br>";
    }
    ?>
    </div>
</body>
</html>
