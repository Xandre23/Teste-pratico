<?php
namespace App\Models;
use Config\Database;
use PDO;

require_once __DIR__ . '/../../config/database.php';

class Fornecedores {
    private $conn;
    private $table_name = "fornecedores";

    public $id;
    public $nome;
    public $cnpj;
    public $telefone;
    public $email;

    public function __construct() {

        $this->conn = Database::getConnection();
    }

    public function inserir() {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, cnpj=:cnpj, telefone=:telefone, email=:email";
        $stmt = $this->conn->prepare($query);

        // limpar dados (simples)
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->cnpj = htmlspecialchars(strip_tags($this->cnpj));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));
        $this->email = htmlspecialchars(strip_tags($this->email));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cnpj", $this->cnpj);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":email", $this->email);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

   public function listar() {
    $query = "SELECT id, nome, cnpj, telefone, email FROM " . $this->table_name . " ORDER BY nome ASC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function buscarTodos()
{
    $query = "SELECT id, nome FROM " . $this->table_name . " ORDER BY nome ASC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

}
