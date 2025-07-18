<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
     
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/telefone-mask.js"></script>
</head>
<body>
    <div class="form-container">
        <h1>Cadastrar Cliente</h1>

        <form action="/clientes" method="POST" class="form-cadastro">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required placeholder="Digite o nome completo" />

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required placeholder="exemplo@dominio.com" />

            <label for="telefone">Telefone:</label>
            <input type="tel" name="telefone" id="telefone" placeholder="(99) 99999-9999" />

            <button type="submit" class="btn salvar">Cadastrar</button>
        </form>

        <a href="/clientes" class="btn btn-secondary"> Lista de clientes</a>
        
       
        
    </div>
</body>
</html>
