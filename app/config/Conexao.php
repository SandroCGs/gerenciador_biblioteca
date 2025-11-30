<?php
class Conexao {
    public static function getConexao() {
        return new PDO("mysql:host=localhost;dbname=nome_do_teu_banco;charset=utf8", "root", "root");
    }
}
