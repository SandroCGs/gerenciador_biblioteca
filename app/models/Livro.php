<?php
    class Livro{
        private $id_livro;
        private $titulo;
        private $autor;
        private $ano;

        function getTitulo(){
            return $this->titulo;
        }
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        function getAutor(){
            return $this->autor;
        }
        function setAutor($autor){
            $this->autor = $autor;
        }
        function getAno(){
            return $this->ano;
        }
        function setAno($ano){
            $this->ano = $ano;
        }
        

    }