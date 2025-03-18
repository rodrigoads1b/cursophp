 <!-- Exercício 04: Crie um programa que receba um número real e mostre a parte inteira e a parte fracionada desse número. -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao Analisador</h1>
    </header>
    <main>
        <h2>Analisador de numero real</h2>
        <?php
            $valor_digitado = $_GET['num'];

            $parte_inteira = intval($valor_digitado);
            $parte_fracionada = $valor_digitado - $parte_inteira;
        ?>
        <ul>
            <li>O número digitado foi: <?php echo $valor_digitado; ?></li>
            <li>A parte inteira do número digitado foi: <?php echo $parte_inteira; ?></li>
            <li>A parte fracionada do número digitado foi: <?php echo number_format($parte_fracionada, 3); ?></li>
        </ul>
        <button onclick="history.back()">Voltar para pagína anterior</button>      
    </main>  
    
    <footer>
        <p>Desenvolvido por Rodrigo Ribeiro da silva &copy; - 2025</p>
    </footer>
</body>
</html>