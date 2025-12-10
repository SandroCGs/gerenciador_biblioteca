<?php
$route = $_GET['route'] ?? 'home';

require_once "app/config/Conexao.php";
require_once "app/models/LivroModel.php";
require_once "app/controllers/LivroController.php";

$controller = new LivroController();

switch ($route) {
    
    case "loginFuncionario":
        
        break;

    case "listarLivro":
        $controller->listar();
        break;

    case "cadastrarLivro":
        $controller->cadastrar();
        break;

    case "editarLivro":
        $controller->editar();
        break;

    case "excluirLivro":
        $controller->excluir();
        break;

    case "pesquisarLivro":
        $controller->pesquisar();
        break;

    

    
    case "cadastroUsuario":
        break;
    
    case "excluiUsuario":

        break;

    case "loginUsuario":
        
        break;

    case "listarUsuarios":
        break;

    case "pesquisarUsuario":
        break;
    
    


    case "emprestimo":
        //! controller chamando emprestimo
        break;
    
    case "devolveLivro":

        break;

    default:
        echo "<a href='?route=listarLivro'>Livros</a>";
        break;
}