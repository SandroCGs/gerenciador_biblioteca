<?php
class LivroController
{

    public function listar()
    {
        $model = new LivroModel();
        $livros = $model->lista();
        require "app/views/livro/listar.php";
    }

    public function cadastrar()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $model = new LivroModel();
            $model->salvar($_POST["titulo"], $_POST["autor"], $_POST["ano"]);
            header("Location: ?route=listarLivro");
            exit;
        }
        require "app/views/livro/cadastrar.php";
    }

    public function pesquisar()
    {
        $model = new LivroModel();
        $resultado = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $resultado = $model->pesquisar($_POST["termo"]);
        }

        require "app/views/livro/pesquisar.php";
    }

    public function editar()
    {
        // 1. pegar id
        $id = $_GET['id'] ?? null;

        if (!$id || !is_numeric($id)) {
            echo "ID inválido";
            return;
        }

        $model = new LivroModel();

        // 2. se for POST → atualizar
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $titulo = $_POST["titulo"];
            $autor  = $_POST["autor"];
            $ano    = $_POST["ano"];

            $model->atualizar($id, $titulo, $autor, $ano);
            header("Location: ?route=listarLivro");
            exit;
        }

        // 3. se for GET → buscar livro
        $livro = $model->selectById($id);

        if (!$livro) {
            echo "Livro não encontrado.";
            return;
        }

        // 4. carregar view
        require "app/views/livro/editar.php";
    }

    public function excluir()
    {
        $model = new LivroModel();

        $id = $_GET["id"] ?? null;
        if ($id) {
            $model->excluir($id);
        }

        header("Location: ?route=listarLivro");
        exit;
    }
}
