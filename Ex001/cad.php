<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastro de Usuário</h1>   
    </header> 
    <main>
        <?php 
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome']; 
            echo "É um prazer conhecê-lo " . $nome . " " . $sobrenome . "<br>";           
        ?>
        <button onclick="history.back()">Voltar para pagína anterior</button>
    </main>   
</body>
</html>