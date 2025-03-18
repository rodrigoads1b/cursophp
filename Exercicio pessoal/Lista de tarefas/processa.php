<?php
require 'funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    if ($acao === 'adicionar' && !empty($_POST['tarefa'])) {
        adicionarTarefa($_POST['tarefa']);
    } elseif ($acao === 'concluir' && isset($_POST['index'])) {
        concluirTarefa($_POST['index']);
    } elseif ($acao === 'excluir' && isset($_POST['index'])) {
        excluirTarefa($_POST['index']);
    }
}

header('Location: index.php');
exit;
?>