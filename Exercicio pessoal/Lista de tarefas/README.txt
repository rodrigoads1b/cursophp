/**
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
 */