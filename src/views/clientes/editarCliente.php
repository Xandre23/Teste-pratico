<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="/css/editNovo.css" />
    <script src="/js/telefone-mask.js"></script>
</head>
<body>
    <h1>Editar Cliente</h1>
    <a href="/clientes" class="btn-voltar">← Voltar para a Lista</a>

    <form action="/clientes/update" method="post">
        <input type="hidden" name="id" value="<?= htmlspecialchars($cliente['id']) ?>">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($cliente['email']) ?>" required>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" required>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>
</body>
</html>
