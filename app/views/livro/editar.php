<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
</head>

<body>
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
</body>

</html>


