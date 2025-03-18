<?php

define('ARQUIVO', 'tarefas.json');

function carregarTarefas() {
    if (!file_exists(ARQUIVO)) {
        return [];
    }
    return json_decode(file_get_contents(ARQUIVO), true);
}

function salvarTarefas($tarefas) {
    file_put_contents(ARQUIVO, json_encode($tarefas, JSON_PRETTY_PRINT));
}

function adicionarTarefa($nome) {
    $tarefas = carregarTarefas();
    $tarefas[] = ['nome' => $nome, 'concluida' => false];
    salvarTarefas($tarefas);
}

function concluirTarefa($index) {
    $tarefas = carregarTarefas();
    if (isset($tarefas[$index])) {
        $tarefas[$index]['concluida'] = true;
        salvarTarefas($tarefas);
    }
}

function excluirTarefa($index) {
    $tarefas = carregarTarefas();
    if (isset($tarefas[$index])) {
        array_splice($tarefas, $index, 1);
        salvarTarefas($tarefas);
    }
}
