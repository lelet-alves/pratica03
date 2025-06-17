<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 10 - Registro de Presenças</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Lista de Participantes Únicos</h2>

    <?php
    $listaParticipantes = ['Caique', 'Ana', 'João', 'Maria', 'João', 'Italo', 'Maria', 'Ana'];

    $participantesUnicos = array_unique($listaParticipantes);

    foreach ($participantesUnicos as $nome) {
        echo "- $nome<br>";
    }
    ?>
    </div>
</body>
</html>
