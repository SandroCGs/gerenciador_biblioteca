<link rel="stylesheet" href="public/css/style.css">

<div class="container">
    <h2>Livros</h2>

    <a href="?route=cadastrarLivro">Cadastrar livro</a> |
    <a href="?route=pesquisarLivro">Pesquisar</a>

    <?php foreach ($livros as $l): ?>
        <p>
            <?= $l["titulo"] ?> - <?= $l["autor"] ?> (<?= $l["ano"] ?>)
            <a href="?route=editarLivro&id=<?= $l['id_livro'] ?>">Editar</a>
            <a href="?route=excluirLivro&id=<?= $l['id_livro'] ?>">Excluir</a>
        </p>
    <?php endforeach; ?>

</div>

