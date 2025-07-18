<?php

namespace App\Models;

use Config\Database;
use PDO;

require_once __DIR__ . '/../../config/database.php';

class Produto
{
    private $conn;
    private $table_name = "produtos";

    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $fornecedor_id;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function setNome($nome)
    {
        $this->nome = htmlspecialchars(strip_tags($nome));
    }

    public function setPreco($preco)
    {
        $this->preco = filter_var($preco, FILTER_VALIDATE_FLOAT);
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = (int)$quantidade;
    }

    public function setFornecedorId($fornecedor_id)
    {
        $this->fornecedor_id = (int)$fornecedor_id;
    }

    public function inserir()
    {
        $query = "INSERT INTO " . $this->table_name . " (nome, preco, fornecedor_id, quantidade) 
                  VALUES (:nome, :preco, :fornecedor_id, :quantidade)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':preco', $this->preco);
        $stmt->bindParam(':fornecedor_id', $this->fornecedor_id);
        $stmt->bindParam(':quantidade', $this->quantidade, PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function listar()
    {
        $query = "SELECT p.id, p.nome, p.preco, p.quantidade, f.nome as fornecedor_nome
                  FROM " . $this->table_name . " p
                  JOIN fornecedores f ON p.fornecedor_id = f.id
                  ORDER BY p.nome ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId($id)
{
    $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 1";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function atualizar()
{
    $query = "UPDATE " . $this->table_name . " SET nome = :nome, preco = :preco, quantidade = :quantidade, fornecedor_id = :fornecedor_id WHERE id = :id";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(':nome', $this->nome);
    $stmt->bindParam(':preco', $this->preco);
    $stmt->bindParam(':quantidade', $this->quantidade);
    $stmt->bindParam(':fornecedor_id', $this->fornecedor_id);
    $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

    return $stmt->execute();
}

public function deletar($id)
{
    $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    return $stmt->execute();
}

public function setId($id)
{
    $this->id = (int) $id;
}
}