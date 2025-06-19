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

    <form method="post" action="">
        <label>Digite uma frase para análise:</label><br>
        <input type="text" name="frase"
        required size="60"><br><br>
        <input type="submit" name="analisar_frase" value="Analisar Frase">
    </form>

    <?php
    if (isset($_POST['analisar_frase']) && isset($_POST['frase'])) {
        $textoAnalise = trim($_POST['frase']);
        $palavras = explode(" ", $textoAnalise);

        echo "<h3>Vetor de Palavras:</h3>";
        echo "<pre>";
        print_r($palavras);
        echo "</pre>";

        $quantidadePalavras = count($palavras);
        echo "<p>Quantidade de palavras na frase: <strong>$quantidadePalavras</strong></p>";
    }
    ?>
    </div>
</body>
</html>
