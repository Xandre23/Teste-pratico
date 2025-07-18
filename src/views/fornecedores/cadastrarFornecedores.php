<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastrar Fornecedor</title>

    <!-- Link para o CSS externo -->
    <link rel="stylesheet" href="/css/stylecadFornecedor.css" />
    <script src="/js/cnpj-mask.js"></script>
    <script src="/js/telefone-mask.js"></script>
    
    <!-- Fonte do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="page-bg">
    <div class="form-container">
        <h1 class="form-title">Cadastrar Fornecedor</h1>

        <form action="/cadastrarFornecedor" method="POST" class="form-cadastroFornecedores">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required placeholder="Digite o nome do fornecedor" />
            </div>

            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" name="cnpj" id="cnpj" required 
                placeholder="00.000.000/0000-00" 
                 />
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="(99) 99999-9999" />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required placeholder="exemplo@dominio.com" />
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>

        <div class="links">
            <a href="/fornecedores" class="btn btn-secondary">← Voltar para lista de Fornecedores</a>
            <a href="/" class="btn btn-outline">🏠 Voltar para Página Inicial</a>
        </div>
    </div>
</body>
</html>
