<?php
declare(strict_types=1);
$produtos = [
    [
        'nome' => 'Caderno',
        'preco' => 20.0,
    ],
    [
        'nome' => 'Caneta',
        'preco' => 3.5,
    ],
];
function moeda(float $valor): string {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="UTF-8">
    <title>
        Produtos
    </title>
    <h1>
        Produtos
    </h1>
    <ul>
        <?php foreach ($produtos as $produto): ?>
        <li>
            <?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8') ?>
            : <?= moeda($produto['preco']) ?>
        </li>
        <?php endforeach; ?>
    </ul>
</html>
