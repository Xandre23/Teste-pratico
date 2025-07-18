<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    
    <link rel="stylesheet" href="/css/styleProduto.css">
</head>
<body>

<a href="/" class="btn">🏠 Voltar para Página Inicial</a>

<h1>Lista de Produtos</h1>

<!-- Botão para cadastrar produto -->
<a href="/produtos/cadastrar" class="btn-novo">➕ Cadastrar Produto</a>

<?php if (!empty($produtos)) : ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Fornecedor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $p) : ?>
                <tr>
                    <td><?= htmlspecialchars($p['nome']) ?></td>
                    <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                    <td><?= $p['quantidade'] ?></td>
                    <td><?= htmlspecialchars($p['fornecedor_nome']) ?></td>
                    <td>
                        <a href="/produtos/editar?id=<?= $p['id'] ?>" class="btn editar">Editar</a>
                        <a href="/produtos/deletar?id=<?= $p['id'] ?>" class="btn deletar" onclick="return confirm('Tem certeza que deseja deletar este produto?')">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Nenhum produto encontrado.</p>
<?php endif; ?>

</body>
</html>
