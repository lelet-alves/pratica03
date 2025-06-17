<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 2 - Boletim Escolar</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Boletim do Aluno</h2>

    <?php
    $boletim = [
        "Português"   => 9.5,
        "Matemática"  => 7.0,
        "História"    => 5.3,
        "Geografia"   => 4.9
    ];

    foreach ($boletim as $disciplina => $nota) {
        echo "Disciplina: $disciplina - Nota: $nota - ";
        if ($nota >= 7.0) {
            echo "<strong>Aprovado</strong><br>";
        } else {
            echo "<strong>Reprovado</strong><br>";
        }
    }
    ?>
    </div>
</body>
</html>