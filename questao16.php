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

    <form method="post" action="">
        <label>Digite os caracteres permitidos para a senha (separados por vírgula):</label><br>
        <input type="text" name="caracteres" placeholder="Exemplo: a,b,c,1,2,3,@,#,$,%,&" required size="50"><br><br>
        <input type="submit" name="gerar_base" value="Mostrar Base de Caracteres">
    </form>

    <?php
    if (isset($_POST['gerar_base']) && isset($_POST['caracteres'])) {
        $entrada = $_POST['caracteres'];
        $caracteresPermitidos = array_map('trim', explode(',', $entrada));

        $baseSenha = implode('', $caracteresPermitidos);

        echo "<h3>Base de caracteres para geração de senhas:</h3>";
        echo "<strong>" . htmlspecialchars($baseSenha) . "</strong>";
    }
    ?>
    </div>
</body>
</html>
