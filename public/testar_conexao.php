<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Config\Database;

try {
    $conn = Database::getConnection();
    echo "✅ Conexão bem-sucedida com o banco de dados!";
} catch (PDOException $e) {
    echo "❌ Erro: " . $e->getMessage();
}
