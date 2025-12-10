<link rel="stylesheet" href="public/css/style.css">

<div class="container">
    <h2>Editar Livro</h2>

    <form method="POST">
        <input type="hidden" name="id" value="<?= $livro['id_livros'] ?>">

        <input name="titulo" value="<?= $livro['titulo'] ?>"><br>
        <input name="autor" value="<?= $livro['autor'] ?>"><br>
        <input name="ano" value="<?= $livro['ano'] ?>"><br>

        <button type="submit">Salvar</button>
    </form>
</div>