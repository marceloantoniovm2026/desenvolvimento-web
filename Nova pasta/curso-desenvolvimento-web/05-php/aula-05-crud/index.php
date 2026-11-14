<?php
declare(strict_types=1);
session_start();
require __DIR__ . '/../banco/conexao.php';
function e(string $valor): string {
    return htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
}
$_SESSION['csrf'] ??= bin2hex(random_bytes(32));
$mensagem = $_SESSION['mensagem'] ?? '';
unset($_SESSION['mensagem']);
$alunos = [];
try {
    $pdo = conectar();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $token = $_POST['csrf'] ?? null;
        if (!is_string($token) || !hash_equals($_SESSION['csrf'], $token)) {
            http_response_code(403);
            exit('Solicitação inválida. Recarregue a página.');
        }
        $acao = $_POST['acao'] ?? '';
        $id = filter_var($_POST['id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
        if (!in_array($acao, ['criar', 'editar', 'excluir'], true)) {
            $mensagem = 'Ação inválida.';
        }
        elseif ($acao !== 'criar' && !$id) {
            $mensagem = 'Identificador inválido.';
        }
        elseif ($acao === 'excluir') {
            $stmt = $pdo->prepare('DELETE FROM alunos WHERE id = :id');
            $stmt->execute(['id' => $id]);
            $mensagem = $stmt->rowCount() ? 'Aluno excluído.' : 'Aluno não encontrado.';
        }
        else {
            $nome = is_string($_POST['nome'] ?? null) ? trim($_POST['nome']) : '';
            $email = is_string($_POST['email'] ?? null) ? trim($_POST['email']) : '';
            if ($nome === '' || strlen($nome) > 100 || strlen($email) > 150 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $mensagem = 'Informe nome de até 100 bytes e e-mail válido de até 150 bytes.';
            }
            elseif ($acao === 'criar') {
                $stmt = $pdo->prepare('INSERT INTO alunos (nome, email) VALUES (:nome, :email)');
                $stmt->execute(['nome' => $nome, 'email' => $email]);
                $mensagem = 'Aluno cadastrado.';
            }
            else {
                $stmt = $pdo->prepare('UPDATE alunos SET nome = :nome, email = :email WHERE id = :id');
                $stmt->execute(['nome' => $nome, 'email' => $email, 'id' => $id]);
                $mensagem = 'Atualização concluída. Se os valores já eram iguais, nada mudou.';
            }
        }
        $_SESSION['mensagem'] = $mensagem;
        header('Location: index.php', true, 303);
        exit;
    }
    $alunos = $pdo->query('SELECT id, nome, email FROM alunos ORDER BY id DESC')->fetchAll();
}
catch (PDOException $erro) {
    error_log($erro->getMessage());
    if ($erro->getCode() === '23000') {
        $mensagem = 'Este e-mail já está cadastrado.';
    }
    else {
        http_response_code(500);
        $mensagem = 'Não foi possível acessar o banco. Consulte o terminal do servidor.';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            CRUD de alunos
        </title>
        <style>
            body {
                font:1rem/1.5 sans-serif;
                max-width:900px;
                margin:auto;
                padding:1rem
            }
            form {
                display:flex;
                gap:.5rem;
                flex-wrap:wrap;
                margin:1rem 0
            }
            article {
                border:1px solid #aaa;
                padding:1rem;
                margin:1rem 0
            }
            input {
                max-width:100%
            }
            button {
                cursor:pointer
            }
        </style>
    </head>
    <body>
        <h1>
            Cadastro de alunos
        </h1>
        <p role="status">
            <?= e($mensagem) ?>
        </p>
        <h2>
            Novo aluno
        </h2>
        <form method="post">
            <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
            <input type="hidden" name="acao" value="criar">
            <label>
                Nome
                <input name="nome" required maxlength="100">
            </label>
            <label>
                E-mail
                <input name="email" type="email" required maxlength="150">
            </label>
            <button>
                Cadastrar
            </button>
        </form>
        <h2>
            Alunos cadastrados
        </h2>
        <?php if (!$alunos): ?>
        <p>
            Nenhum aluno para exibir.
        </p>
        <?php endif; ?>
                <?php foreach ($alunos as $aluno): ?>
        <article>
            <h3>
                <?= e($aluno['nome']) ?>
            </h3>
            <form method="post">
                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?= (int) $aluno['id'] ?>">
                <label>
                    Nome
                    <input name="nome" value="<?= e($aluno['nome']) ?>" required maxlength="100">
                </label>
                <label>
                    E-mail
                    <input name="email" type="email" value="<?= e($aluno['email']) ?>" required maxlength="150">
                </label>
                <button>
                    Salvar alterações
                </button>
            </form>
            <form method="post">
                <input type="hidden" name="csrf" value="<?= e($_SESSION['csrf']) ?>">
                <input type="hidden" name="acao" value="excluir">
                <input type="hidden" name="id" value="<?= (int) $aluno['id'] ?>">
                <button>
                    Excluir <?= e($aluno['nome']) ?>
                </button>
            </form>
        </article>
        <?php endforeach; ?>
    </body>
</html>
