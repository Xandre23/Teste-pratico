<?php

namespace App\Controllers;

use App\Models\Cliente;

class ClienteController
{
 public function index()
{
    $clienteModel = new Cliente();
    $clientes = $clienteModel->listar();

    require __DIR__ . '/../views/clientes/listarClientes.php';
}

    public function create()
    {
        require_once __DIR__ . '/../views/clientes/cadastrarCliente.php';
    }

    public function store()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefone = $_POST['telefone'] ?? '';

        $clienteModel = new Cliente();
        
        $clienteModel->nome = $nome;
        $clienteModel->email = $email;
        $clienteModel->telefone = $telefone;

        $clienteModel->inserir();

        header("Location: /clientes");
        exit;
        }
    }
    
}
