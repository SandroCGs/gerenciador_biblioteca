<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Livro</title>
</head>

<body>
    <h2>Pesquisar Livro</h2>

    <form method="POST">
        <input name="termo" placeholder="Título">
        <button type="submit">Pesquisar</button>
    </form>

    <?php if (!empty($resultado)): ?>
        <h3>Resultados:</h3>
        <?php foreach ($resultado as $l): ?>
            <p><?= $l["titulo"] ?> - <?= $l["autor"] ?> - <?= $l["ano"] ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <a href="?route=listarLivro">Voltar</a>
</body>

</html>

