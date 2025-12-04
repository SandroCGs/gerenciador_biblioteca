<?php
    class LivroModel {
        public function lista(){
            $conexao = Conexao::getConexao();
            $sql = "SELECT * FROM livros";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function salvar($titulo, $autor, $ano){
            $conexao = Conexao::getConexao();
            $sql = "INSERT INTO livros(titulo, autor, ano)
            VALUES(?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            $stmt->execute([ $titulo, $autor, $ano ]);
        }
    }