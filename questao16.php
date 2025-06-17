<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 16 - Gerador de Senhas</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <div class="container">
    <h2>Gerador de Senhas</h2>

    <?php
    $caracteresPermitidos = ['a', 'b', 'c', '1', '2', '3', '@', '#', '$', '%', '&'];

    $baseSenha = implode('', $caracteresPermitidos);

    echo "<p>Base de caracteres para geração de senhas:</p>";
    echo "<strong>" . htmlspecialchars($baseSenha) . "</strong>";
    ?>
    </div>
</body>
</html>
