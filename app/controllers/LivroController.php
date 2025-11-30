<?php
    class LivroController{
        function listar(){
            $livroModel = new LivroModel();
            $view = $livroModel -> lista();
            require "app/views/livro/listar.php";
        }
    }