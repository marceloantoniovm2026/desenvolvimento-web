<?php
declare(strict_types=1);
$nome = 'Estudante';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <title>
        PHP
    </title>
    <h1>
        Olá, <?= htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') ?>!
    </h1>
    <p>
        Este conteúdo foi gerado pelo PHP.
    </p>
</html>
