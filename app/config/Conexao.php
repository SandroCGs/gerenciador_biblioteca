<?php
class Conexao {
    public static function getConexao() {
        return new PDO("mysql:host=localhost;dbname=Biblioteca;charset=utf8", "root", "root");
    }
}
