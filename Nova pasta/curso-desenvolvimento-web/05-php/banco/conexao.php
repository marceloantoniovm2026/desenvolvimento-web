<?php
declare(strict_types=1);
function conectar(): PDO
{
    $host = getenv('DB_HOST') ?: '127.0.0.1';
    $porta = getenv('DB_PORT') ?: '3306';
    $banco = getenv('DB_NAME') ?: 'curso_web';
    $usuario = getenv('DB_USER') ?: 'curso_app';
    $senha = getenv('DB_PASS');
    if ($senha === false || $senha === '') {
        throw new PDOException('Configure DB_PASS no ambiente antes de iniciar o servidor.');
    }
    return new PDO("mysql:host=$host;port=$porta;dbname=$banco;charset=utf8mb4", $usuario, $senha, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
}
