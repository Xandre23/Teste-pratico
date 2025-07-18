<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="/css/edit.css" />
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="/produtos/editar" method="post">
        <input type="hidden" name="id" value="<?= $produto['id'] ?>">

        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?= htmlspecialchars($produto['nome']) ?>" required><br><br>

        <label>Preço:</label><br>
        <input type="text" name="preco" value="<?= $produto['preco'] ?>" required><br><br>

        <label>Quantidade:</label><br>
        <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required><br><br>

        <label>Fornecedor:</label><br>
        <select name="fornecedor_id" required>
            <?php foreach ($fornecedores as $f): ?>
                <option value="<?= $f['id'] ?>" <?= $f['id'] == $produto['fornecedor_id'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($f['nome']) ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>

        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
