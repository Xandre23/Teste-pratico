<?php
namespace App\Controllers;

use App\Models\Produto;
use App\Models\Fornecedores;


class ProdutoController
{
    public function listarProdutos()
    {
        $produto = new Produto();
        $produtos = $produto->listar();
        include '../src/views/produtos/listarProduto.php';
    }

    public function formularioProduto()
    {
        $fornecedoresModel = new Fornecedores();
        $fornecedores = $fornecedoresModel->buscarTodos();
        
        include '../src/views/produtos/cadastrarProdutos.php';
    }

    public function inserirProduto()
    {
        $produto = new Produto();
        $produto->setNome($_POST['nome']);
        $produto->setPreco($_POST['preco']);
        $produto->setQuantidade($_POST['quantidade']);
        $produto->setFornecedorId($_POST['fornecedor_id']);
        $produto->inserir();

        // Mensagem amigável antes de redirecionar
        echo "<script>alert('Produto cadastrado com sucesso!'); window.location.href = '/produtos';</script>";
    }

    // Exibir formulário para editar o produto
    public function editarProduto()
    {
        if (!isset($_GET['id'])) {
            header('Location: /produtos');
            exit;
        }

        $id = (int) $_GET['id'];
        $produtoModel = new Produto();
        $produto = $produtoModel->buscarPorId($id);

        if (!$produto) {
            echo "Produto não encontrado!";
            exit;
        }

        $fornecedoresModel = new Fornecedores();
        $fornecedores = $fornecedoresModel->buscarTodos();

        include '../src/views/produtos/editar.php';
    }

    // Atualizar o produto no banco
    public function atualizarProduto()
    {
        $produto = new Produto();
        $produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setPreco($_POST['preco']);
        $produto->setQuantidade($_POST['quantidade']);
        $produto->setFornecedorId($_POST['fornecedor_id']);
        $produto->atualizar();

        echo "<script>alert('Produto atualizado com sucesso!'); window.location.href = '/produtos';</script>";
    }

    // Deletar produto
    public function deletarProduto()
    {
        if (!isset($_GET['id'])) {
            header('Location: /produtos');
            exit;
        }

        $id = (int) $_GET['id'];
        $produto = new Produto();
        $produto->deletar($id);

        echo "<script>alert('Produto deletado com sucesso!'); window.location.href = '/produtos';</script>";
    }
    
}
