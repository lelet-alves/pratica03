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

    <?php
    $filaAtendimento = ['Lelet', 'Lana Liz', 'Italo Lino'];

    array_unshift($filaAtendimento, 'Ana Clara');

    array_push($filaAtendimento, 'Lucas filho');

    echo "<h3>Fila de Atendimento Atual:</h3>";
    echo "<ul>";
    foreach ($filaAtendimento as $paciente) {
        echo "<li>" . htmlspecialchars($paciente) . "</li>";
    }
    echo "</ul>";
    ?>
    </div>
</body>
</html>
