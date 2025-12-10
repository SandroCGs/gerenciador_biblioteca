<?php
class LivroModel
{

    public function lista()
    {
        $db = Conexao::getConexao();
        $sql = "SELECT * FROM livros";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function salvar($titulo, $autor, $ano)
    {
        $db = Conexao::getConexao();
        $sql = "INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->execute([$titulo, $autor, $ano]);
    }

    public function selectById($id)
    {
        $conexao = Conexao::getConexao();
        $sql = "SELECT * FROM livros WHERE id_livro = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $titulo, $autor, $ano)
    {
        $conexao = Conexao::getConexao();
        $sql = "UPDATE livros SET titulo = ?, autor = ?, ano = ? WHERE id_livro = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$titulo, $autor, $ano, $id]);
    }

    public function pesquisar($termo)
    {
        $db = Conexao::getConexao();
        $sql = "SELECT * FROM livros WHERE titulo LIKE ?";
        $stmt = $db->prepare($sql);
        $stmt->execute(["%$termo%"]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function excluir($id)
    {
        $con = Conexao::getConexao();
        $sql = "DELETE FROM livros WHERE id_livro = ?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$id]);
    }
}
