<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Exercício 02</h1>        
    </header>
    <main>
        <h2>Trabalhando com números aleatórios</h2>
        <p>Gerando número aleatório de 0 a 100.</p>
        
        <form method="get" action="index.php">
            <button type="submit" name="gerar">Gerar</button>
        </form>
        
        <p id="numero">
            <?php
                if (isset($_GET['gerar'])) {
                    $numero = rand(0, 100);
                    echo "Número gerado: $numero";
                }
            ?>
        </p>
    </main>
</body>
</html>