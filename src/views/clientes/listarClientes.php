<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="/css/Cliente.css" />
</head>
<body>
    <h1>Clientes</h1>
    <a href="/" class="btn-novo">🏠 Voltar para Página Inicial</a>
    <a href="/clientes/create" class="btn-novo">Novo Cliente</a>

    <?php if (empty($clientes)): ?>
        <p class="empty">Nenhum cliente cadastrado.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= htmlspecialchars($cliente['nome']) ?></td>
                        <td><?= htmlspecialchars($cliente['email']) ?></td>
                        <td><?= htmlspecialchars($cliente['telefone']) ?></td>
                        <td class="acoes">
                            <a href="/clientes/edit?id=<?= $cliente['id'] ?>" class="btn editar">✏️ Editar</a>
                            <a href="/clientes/delete?id=<?= $cliente['id'] ?>" class="btn deletar" onclick="return confirm('Tem certeza que deseja deletar este cliente?');">🗑️ Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
