<p>View de listagem de livros</p>

<?php foreach($livros as $livro): ?>
    <p>Título: <?= $livro['titulo'] ?> - Autor: <?= $livro['autor'] ?> - Ano: (<?= $livro['ano'] ?>)</p>
<?php endforeach; ?>

