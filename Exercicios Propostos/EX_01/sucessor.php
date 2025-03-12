<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sucessor</h1>   
    </header> 
    <main>
        <?php 
        $resultado = "";    
            $numero = $_GET['numero'];
            $operacao = $_GET['operacao'];
            if($operacao == "sucessor"){
                $sucessor = $numero + 1; 
                $resultado = "O sucessor de " . $numero . " é " . $sucessor . "<br>";
            }else if($operacao == "antecessor"){
                $antecessor = $numero - 1; 
                $resultado = "O antecessor de " . $numero . " é " . $antecessor . "<br>";
            }else if ($operacao == "ambos"){
                $antecessor = $numero - 1; 
                $resultado = "O antecessor de " . $numero . " é " . $antecessor . "<br>";
                $sucessor = $numero + 1;
                $resultado .= "O sucessor de " . $numero . " é " . $sucessor . "<br>";
            }else{
                $resultado = "Operação inválida";
            }
            echo $resultado;                      
        ?>
        <button onclick="history.back()">Voltar para pagína anterior</button>

    </main>
    <footer>
        <p>Desenvolvido por Rodrigo Ribeiro da silva &copy; - 2021</p>
</body>
</html>