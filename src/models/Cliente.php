<?php
namespace App\Models;
use Config\Database;
use PDO;

require_once __DIR__ . '/../../config/database.php';

class Cliente {
    private $conn;
    private $table_name = "clientes";

    public $id;
    public $nome;
    public $email;
    public $telefone;

    public function __construct() {

        $this->conn = Database::getConnection();
    }

    public function inserir() {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, email=:email, telefone=:telefone";
        $stmt = $this->conn->prepare($query);

        // limpar dados (simples)
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->telefone = htmlspecialchars(strip_tags($this->telefone));

        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":telefone", $this->telefone);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

   public function listar() {
    $query = "SELECT id, nome, email, telefone FROM " . $this->table_name . " ORDER BY nome ASC";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}
