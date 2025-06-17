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

    <?php
    $registrosTreino = [
        ["nome" => "Lelet", "resultados" => [50, 55, 60]],
        ["nome" => "italo", "resultados" => [30, 35, 38]],
        ["nome" => "João", "resultados" => [65, 70, 68]]
    ];

    foreach ($registrosTreino as $aluno) {
        $nome = $aluno["nome"];
        $melhorResultado = max($aluno["resultados"]);
        echo "<strong>$nome</strong> - Melhor resultado: $melhorResultado<br>";
    }
    ?>
    </div>
</body>
</html>
