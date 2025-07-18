<?php

namespace App\Controllers;

use App\Models\Fornecedores;

class FornecedorController
{
    public function listarFornecedores()
    {
        $fornecedoresModel = new Fornecedores();
    $fornecedores = $fornecedoresModel->listar();

    require_once __DIR__ . '/../views/fornecedores/listarFornecedor.php';
    }

    public function cadastrarFornecedor()
    {
        require_once __DIR__ . '/../views/fornecedores/cadastrarFornecedores.php';
    }

    public function inserirFornecedor()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'] ?? '';
        $cnpj = $_POST['cnpj'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $email = $_POST['email'] ?? '';

        $fornecedoresModel = new Fornecedores();
        
        $fornecedoresModel->nome = $nome;
        $fornecedoresModel->cnpj = $cnpj;
        $fornecedoresModel->telefone = $telefone;
        $fornecedoresModel->email = $email;
        

        $fornecedoresModel->inserir();
       echo "
    <script>
        alert('Fornecedor cadastrado com sucesso!');
        setTimeout(function() {
            window.location.href = '/fornecedores'; // ajuste para a rota desejada
        }, 100); // 100 milissegundos após o alerta ser fechado
    </script>
";
        exit;
        }
    }
}
