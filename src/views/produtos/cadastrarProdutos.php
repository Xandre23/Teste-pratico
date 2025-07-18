<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastrar Produto</title>
    
    <link rel="stylesheet" href="/css/produtoCad.css" />
</head>
<body>
    
    <div class="container bg-white p-8 rounded-2xl shadow-xl max-w-lg mx-auto mt-10">
        <h1 class="text-gray-800 text-4xl font-extrabold mb-8 text-center">Cadastrar Produto</h1>
        
        <form action="/produtos" method="POST" class="space-y-6">
            <div>
                <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" required class="input-field" />
            </div>

            <div>
                <label for="preco" class="block text-gray-700 font-semibold mb-2">Preço:</label>
                <input type="number" step="0.01" id="preco" name="preco" required class="input-field" />
            </div>
            <div>
                <label for="quantidade">Quantidade:</label><br>
<input type="number" name="quantidade" id="quantidade" required><br>
            </div>

            <div>
                <label for="fornecedor_id" class="block text-gray-700 font-semibold mb-2">Fornecedor:</label>
                <select id="fornecedor_id" name="fornecedor_id" required class="input-field">
                    <option value="">-- Selecione um fornecedor --</option>
                    <?php foreach ($fornecedores as $fornecedor): ?>
                        <option value="<?= $fornecedor['id'] ?>"><?= htmlspecialchars($fornecedor['nome']) ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn indigo-btn w-full">Cadastrar Produto</button>
        </form>
        <a href="/produtos" class="btn blue-btn mt-4 block text-center">Lista de Produtos</a>
        
        
    </div>
</body>
</html>
