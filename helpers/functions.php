<?php
function deletarPorId($tabela, $id, $pdo) {
    $stmt = $pdo->prepare("DELETE FROM $tabela WHERE id = ?");
    return $stmt->execute([$id]);
}

function buscarPorId($tabela, $id, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM $tabela WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch();
}
