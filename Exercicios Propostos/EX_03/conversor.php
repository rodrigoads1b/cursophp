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
            if($_GET['api'] == "nao") {
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
            }
            // 1 para Dólar
                // 21619 para Euro
                // 21623 para Libra   
            else if($_GET['api'] == "sim") {
                define("MOEDA_DOLAR", 1);
                define("MOEDA_EURO", 21619);    
                define("MOEDA_LIBRA", 21623); 
                
                switch ($_GET['moeda']) {
                    case "dolar":
                        $moeda = MOEDA_DOLAR;
                        break;
                    case "euro":
                        $moeda = MOEDA_EURO;
                        break;
                    case "libra":
                        $moeda = MOEDA_LIBRA;
                        break;
                    default:
                        $moeda = 0;
                        break;
                }
                
                $api_url = 'https://api.bcb.gov.br/dados/serie/bcdata.sgs.'.$moeda.'/dados?formato=json&dataInicial=12/03/2025&dataFinal=12/03/2025';

                # Inicializa cURL para uma URL.
                $ch = curl_init($api_url);

                # Define que a transferência deve ser retornada como string
                curl_setopt($ch, CURLOPT_URL, $api_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   

                # Executa a sessão cURL
                $response = curl_exec($ch);

                # Encerra a sessão cURL
                curl_close($ch);

                # Decodifica a resposta JSON
                $data = json_decode($response, true);

                $valor_digitado = $_GET['valor'];

                echo "O valor convertido é: " . $valor_digitado * $data[0]['valor'] . " reais";
            }
        ?>            
            <button onclick="history.back()">Voltar para pagína anterior</button>        
        </main>
        <footer>
            <p>Desenvolvido por Rodrigo Ribeiro da silva &copy; - 2025</p>
        </footer>
</body>
</html>