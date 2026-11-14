<?php
declare(strict_types=1);
$mensagem = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = is_string($_POST['nome'] ?? null) ? trim($_POST['nome']) : '';
    $email = is_string($_POST['email'] ?? null) ? trim($_POST['email']) : '';
    if ($nome === '' || strlen($nome) > 100 || strlen($email) > 150 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = 'Informe um nome de até 100 bytes e um e-mail válido de até 150 bytes.';
    }
    else {
        $mensagem = "Dados válidos de $nome. Este exemplo não salva nem envia e-mails.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <title>
        Formulário PHP
    </title>
    <h1>
        Validar contato
    </h1>
    <p role="status">
        <?= htmlspecialchars($mensagem, ENT_QUOTES, 'UTF-8') ?>
    </p>
    <form method="post">
        <p>
            <label for="nome">
                Nome
            </label>
            <input id="nome" name="nome" required maxlength="100">
        </p>
        <p>
            <label for="email">
                E-mail
            </label>
            <input id="email" name="email" type="email" required maxlength="150">
        </p>
        <button>
            Validar
        </button>
    </form>
</html>
