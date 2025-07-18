<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Editar Fornecedor</title>
    <link rel="stylesheet" href="/css/editNovo.css" />
    <script src="/js/cnpj-mask.js"></script>
    <script src="/js/telefone-mask.js"></script>
</head>
<body>
    <h1>Editar Fornecedor</h1>
    <a href="/fornecedores" class="btn-voltar">← Voltar para Lista de Fornecedores</a>

    <form action="/fornecedores/atualizar" method="POST" class="form-editar">
        <input type="hidden" name="id" value="<?= htmlspecialchars($fornecedor['id']) ?>" />

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required value="<?= htmlspecialchars($fornecedor['nome']) ?>" />

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required value="<?= htmlspecialchars($fornecedor['cnpj']) ?>" />

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required value="<?= htmlspecialchars($fornecedor['telefone']) ?>" />

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required value="<?= htmlspecialchars($fornecedor['email']) ?>" />

        <button type="submit" class="btn btn-outline-success">Salvar Alterações</button>
    </form>
</body>
</html>
