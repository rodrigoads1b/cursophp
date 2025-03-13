<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas</h1>
    </header>
    <main>
        <?php
            // Definindo constantes para as taxas de câmbio
            define("TAXA_DOLAR", 5.8);
            define("TAXA_EURO", 6.31);
            define("TAXA_LIBRA", 7.52);

            $valor_digitado = $_GET['valor'];
            $moeda = $_GET['moeda'];

            if ($moeda == "dolar") {
                $resultado = "O valor convertido é: " . $valor_digitado * TAXA_DOLAR . " reais";
            } else if ($moeda == "euro") {
                $resultado = "O valor convertido é: " . $valor_digitado * TAXA_EURO . " reais";
            } else if ($moeda == "libra") {
                $resultado = "O valor convertido é: " . $valor_digitado * TAXA_LIBRA . " reais";    
            } else {
                $resultado = "Moeda inválida";
            }
            echo $resultado;
        ?>            
            <button onclick="history.back()">Voltar para pagína anterior</button>
        
        </main>
        <footer>
            <p>Desenvolvido por Rodrigo Ribeiro da silva &copy; - 2025</p>
        </footer>
</body>
</html>