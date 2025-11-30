<?php
    class LivroModel {
        public function lista(){
            $conexao = Conexao::getConexao();
            $sql = "SELECT * FROM livros";
            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }