<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questão 4 - Sorteio e Números Primos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
    <h2>Números Sorteados</h2>

    <?php
    function ehPrimo($numero) {
        if ($numero < 2) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $numerosSorteados = [];
    for ($i = 0; $i < 10; $i++) {
        $numerosSorteados[] = rand(1, 60);
    }

    echo "Números: " . implode(", ", $numerosSorteados) . "<br><br>";

    $quantidadePrimos = 0;
    foreach ($numerosSorteados as $numero) {
        if (ehPrimo($numero)) {
            $quantidadePrimos++;
        }
    }

    echo "Quantidade de números primos sorteados: <strong>$quantidadePrimos</strong>";
    ?>
    </div>
</body>
</html>