    <?php
        class LivroController{
            function listar(){
                $livroModel = new LivroModel();
                $livros = $livroModel -> lista();
                require "app/views/livro/listar.php";
            }

            function cadastrar(){
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    $titulo = $_POST["titulo"];
                    $autor = $_POST["autor"];
                    $ano = $_POST["ano"];
                    $livroModel = new LivroModel();
                    $livroModel->salvar($titulo, $autor, $ano);
                    header("Location: ?route=listarLivro");
                    exit;
                } else
                require "app/views/livro/cadastrar.php";
            }
        }