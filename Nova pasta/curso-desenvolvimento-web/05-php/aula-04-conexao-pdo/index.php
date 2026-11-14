<?php
declare(strict_types=1);
require __DIR__ . '/../banco/conexao.php';
try {
    $pdo = conectar();
    $resultado = $pdo->query('SELECT 1')->fetchColumn();
    $mensagem = $resultado == 1 ? 'Conexão ao MySQL realizada com sucesso.' : 'Resultado inesperado.';
}
catch (PDOException $erro) {
    error_log($erro->getMessage());
    http_response_code(500);
    $mensagem = 'Não foi possível conectar. Confira o terminal do servidor e a configuração.';
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <title>
        Conexão PDO
    </title>
    <h1>
        Teste da conexão
    </h1>
    <p>
        <?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?>
    </p>
</html>
