<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 3 - Gestão de Estoque de Livros</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Estoque Atualizado de Livros</h2>

    <?php
    $livros = [
        "O Senhor dos Anéis",
        "Dom Casmurro",
        "1984",
        "A Revolução dos Bichos",
        "Harry Potter e a Pedra Filosofal"
    ];

    array_push($livros, "O Pequeno Príncipe");

    unset($livros[2]);

    $livros = array_values($livros);

    foreach ($livros as $livro) {
        echo "Livro: " . $livro . "<br>";
    }
    ?>
    </div>
</body>
</html>