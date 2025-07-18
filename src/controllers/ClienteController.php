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

    public function edit()
{
    $id = $_GET['id'] ?? null;
    if (!$id) {
        header("Location: /clientes");
        exit;
    }

    $clienteModel = new Cliente();
    $cliente = $clienteModel->buscarPorId($id);

    if (!$cliente) {
        header("Location: /clientes");
        exit;
    }

    require_once __DIR__ . '/../views/clientes/editarCliente.php';
    exit;
}

public function update()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'] ?? null;
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefone = $_POST['telefone'] ?? '';

        if (!$id) {
            header("Location: /clientes");
            exit;
        }

        $clienteModel = new Cliente();
        $clienteModel->id = $id;
        $clienteModel->nome = $nome;
        $clienteModel->email = $email;
        $clienteModel->telefone = $telefone;

        $clienteModel->atualizar();

        header("Location: /clientes");
        exit;
    }
}

public function delete()
{
    $id = $_GET['id'] ?? null;
    if ($id) {
        $clienteModel = new Cliente();
        $clienteModel->deletar($id);
    }
    header("Location: /clientes");
    exit;
}
    
}
