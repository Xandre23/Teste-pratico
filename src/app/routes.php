<?php

use App\Controllers\ClienteController;
use App\Controllers\FornecedorController;
use App\Controllers\ProdutoController;
use App\Controllers\HomeController;

//rotas inicial

$router->get('/', function() {
    (new HomeController())->index();
});

//rotas cliente

// Rota para listar clientes
$router->get('/clientes', function () {
    (new ClienteController())->index();
});

// Rota para exibir o formulário de cadastro de cliente
$router->get('/clientes/create', function () {
    (new ClienteController())->create();
});

// Rota para salvar um novo cliente
$router->post('/clientes', function () {
    (new ClienteController())->store();
});

//rotas fornecedores

$router->get('/fornecedores', function () {
    (new FornecedorController())->listarFornecedores();
});

$router->get('/fornecedores/cadastrar', function () {
    (new FornecedorController())->cadastrarFornecedor();
});

$router->post('/cadastrarFornecedor', function () {
    (new FornecedorController())->inserirFornecedor();
});

//rota de produtos

$router->get('/produtos/cadastrar', function () {
    $controller = new ProdutoController();
    $controller->formularioProduto(); // Método que chama a view
});

$router->post('/produtos', function() {
    $controller = new ProdutoController();
    $controller->inserirProduto();
});

$router->get('/produtos', function() {
    $controller = new ProdutoController();
    $controller->listarProdutos();
});

$router->get('/produtos/editar', function() {
    $controller = new ProdutoController();
    $controller->editarProduto();  // Ou formularioEditarProduto, desde que combine com o controller
});

$router->post('/produtos/editar', function() {
    $controller = new ProdutoController();
    $controller->atualizarProduto();
});

// Rota para deletar produto
$router->get('/produtos/deletar', function() {
    $controller = new ProdutoController();
    $controller->deletarProduto();
});

/*$router->get('/fornecedores', function() {
    $controller = new FornecedorController();
    $controller->index();
});

//$router->get('/produtos', function() {
    $controller = new ProdutoController();
    $controller->index();
});*/
