<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Questão 17 - Análise de Frases</title>
    <link rel="stylesheet" href="estilo.css">

</head>
<body>
    <div class="container">
    <h2>Análise de Frases</h2>

    <?php
    $textoAnalise = "A programação PHP é fundamental para o desenvolvimento web";

    $palavras = explode(" ", $textoAnalise);

    echo "<h3>Vetor de Palavras:</h3>";
    echo "<pre>";
    print_r($palavras);
    echo "</pre>";

    $quantidadePalavras = count($palavras);
    echo "<p>Quantidade de palavras na frase: <strong>$quantidadePalavras</strong></p>";
    ?>
    </div>
</body>
</html>
