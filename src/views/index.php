<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    
    <link rel="stylesheet" href="/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center p-4">
    
    <div class="bg-white p-8 md:p-12 rounded-2xl shadow-xl max-w-lg w-full text-center border border-gray-200">
        <!-- Título principal da página -->
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-8 leading-tight">
            Bem-vindo ao <span class="text-indigo-600">Sistema de Cadastro</span>
        </h1>      
        <div class="space-y-4">
            
            <a href="/clientes/create" class="btn indigo-btn">
                Cadastrar Cliente
            </a>
            
            <a href="/fornecedores/cadastrar" class="btn green-btn">
                Cadastrar Fornecedor
            </a>
           
            <a href="/produtos/cadastrar" class="btn purple-btn">
                Cadastrar Produto
            </a>
            
            <a href="/clientes" class="btn blue-btn">
                Listar Clientes Cadastrados
            </a>
            <a href="/fornecedores" class="btn orange-btn">
                Listar Fornecedores
            </a>
            <a href="/produtos" class="btn teal-btn">
                Listar Produtos
            </a>
        </div>
    </div>
</body>
</html>
