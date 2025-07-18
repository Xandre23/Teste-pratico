<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <a href="/" class="btn">🏠 Voltar para Página Inicial</a>
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="/css/styleFornecedor.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>📋 Lista de Fornecedores</h1>
        
        <a href="/fornecedores/cadastrar" class="btn btn-novo">➕ Novo Fornecedor</a>

        <?php if (empty($fornecedores)): ?>
            <p class="empty">Nenhum fornecedor cadastrado.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fornecedores as $fornecedor): ?>
                        <tr>
                            <td><?= htmlspecialchars($fornecedor['nome']) ?></td>
                            <td><?= htmlspecialchars($fornecedor['cnpj']) ?></td>
                            <td><?= htmlspecialchars($fornecedor['telefone']) ?></td>
                            <td><?= htmlspecialchars($fornecedor['email']) ?></td>
                            <td>
                                <a href="/fornecedores/editar?id=<?= $fornecedor['id'] ?>" class="btn btn-editar">Editar</a>
                                <a href="/fornecedores/deletar?id=<?= $fornecedor['id'] ?>" class="btn btn-deletar" onclick="return confirm('Deseja realmente excluir este fornecedor?');">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>
