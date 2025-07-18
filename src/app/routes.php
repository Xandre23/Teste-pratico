<?php

use App\Controllers\ClienteController;
use App\Controllers\FornecedorController;
use App\Controllers\ProdutoController;
use App\Controllers\HomeController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

//rotas inicial

$router->get('/', function() {
    (new HomeController())->index();
});

//rotas cliente


$router->get('/clientes', function () {
    (new ClienteController())->index();
});


$router->get('/clientes/create', function () {
    (new ClienteController())->create();
});


$router->post('/clientes', function () {
    (new ClienteController())->store();
});


if ($uri === '/clientes/store' && $method === 'POST') {
    (new ClienteController())->store();
}


if ($uri === '/clientes/edit' && $method === 'GET') {
    (new ClienteController())->edit();
}

if ($uri === '/clientes/update' && $method === 'POST') {
    (new ClienteController())->update();
}


if ($uri === '/clientes/delete' && $method === 'GET') {
    (new ClienteController())->delete();
}


$fornecedorController = new FornecedorController();

$router->get('/fornecedores', function () {
    (new FornecedorController())->listarFornecedores();
});

$router->get('/fornecedores/cadastrar', function () {
    (new FornecedorController())->cadastrarFornecedor();
});

$router->post('/cadastrarFornecedor', function () {
    (new FornecedorController())->inserirFornecedor();
});

if ($uri === '/fornecedores/editar' && $method === 'GET') {
    $fornecedorController->editarFornecedor();
}

if ($uri === '/fornecedores/atualizar' && $method === 'POST') {
    $fornecedorController->atualizarFornecedor();
}

if ($uri === '/fornecedores/deletar' && $method === 'GET') {
    $fornecedorController->deletarFornecedor();
}


//rota de produtos

$router->get('/produtos/cadastrar', function () {
    $controller = new ProdutoController();
    $controller->formularioProduto(); 
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
    $controller->editarProduto(); 
});

$router->post('/produtos/editar', function() {
    $controller = new ProdutoController();
    $controller->atualizarProduto();
});

$router->get('/produtos/deletar', function() {
    $controller = new ProdutoController();
    $controller->deletarProduto();
});

