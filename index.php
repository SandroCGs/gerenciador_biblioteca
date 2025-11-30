<?php
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case "emprestimo":
        //! controller chamando emprestimo
        break;

    case "cadastroLivro":
        //! controller
        break;

    case "excluiLivro":

        break;

    case "cadastroUsuario":
        break;
    
    case "excluiUsuario":

        break;

    case "loginUsuario":
        
        break;

    case "loginFuncionario":
        
        break;
    
    case "devolveLivro":

        break;

    case "listarLivro":
        require_once "app/controllers/LivroController.php";
        $livroController = new LivroController(); 
        $livroController->listar();
        break;
    
    case "listarUsuarios":
        break;

    case "pesquisarUsuario":
        break;
    
    case "pesquisarLivro":
    
        break;

    default:
        //home
        break;
}