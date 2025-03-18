<!-- /**
 * Este script é o ponto de entrada principal para um aplicativo de gerenciamento de tarefas.
 * Ele exibe um formulário para adicionar novas tarefas e uma tabela listando todas as tarefas
 * com opções para marcá-las como concluídas ou excluí-las.
 *
 * Requer:
 * - `funcoes.php`: Um arquivo PHP contendo funções auxiliares, incluindo `carregarTarefas()`
 *   que carrega a lista de tarefas.
 *
 * Funcionalidades:
 * - Exibe um formulário para adicionar uma nova tarefa.
 * - Lista todas as tarefas com seu status (concluída ou pendente).
 * - Fornece ações para cada tarefa:
 *   - Marcar como concluída.
 *   - Excluir a tarefa.
 *
 * Estrutura HTML:
 * - Um formulário para adicionar novas tarefas:
 *   - Campo de entrada para o nome da tarefa.
 *   - Botão de envio para adicionar a tarefa.
 * - Uma tabela exibindo as tarefas:
 *   - Colunas para nome da tarefa, status e ações.
 *   - Cada linha da tarefa inclui:
 *     - Nome da tarefa (escapado para segurança).
 *     - Status (✅ para concluída, ❌ para pendente).
 *     - Botões de ação:
 *       - Botão ✅ para marcar a tarefa como concluída.
 *       - Botão 🗑️ para excluir a tarefa.
 *
 * Observações:
 * - O script `processa.php` lida com os envios de formulário para adicionar, concluir e excluir tarefas.
 * - Os dados das tarefas são passados entre o frontend e o backend usando requisições POST.
 * - Estilos inline são usados para os botões do formulário dentro da tabela.
 */ -->
<?php
require 'funcoes.php';

$tarefas = carregarTarefas();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Adicionar Nova Tarefa</h2>
    <form action="processa.php" method="POST">
        <input type="text" name="tarefa" placeholder="Digite uma nova tarefa" required>
        <button type="submit" name="acao" value="adicionar">Adicionar</button>
    </form>

    <h2>Lista de Tarefas</h2>
    <table border="1">
        <tr>
            <th>Tarefa</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($tarefas as $index => $tarefa): ?>
        <tr>
            <td><?= htmlspecialchars($tarefa['nome']) ?></td>
            <td><?= $tarefa['concluida'] ? '✅ Concluída' : '❌ Pendente' ?></td>
            <td>
                <form action="processa.php" method="POST" style="display:inline;">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <button type="submit" name="acao" value="concluir">✅</button>
                </form>
                <form action="processa.php" method="POST" style="display:inline;">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <button type="submit" name="acao" value="excluir">🗑️</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
