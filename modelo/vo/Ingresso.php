<?php

    class Ingresso{

        private $id;
        private $preco;
        private $idSessao;
        private $idCadeira;

        function toString(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setPreco($preco){
            $this->preco = $preco;
        }

        function getPreco(){
            return $this->preco;
        }

        function setIdSessao($idSessao){
            $this->idSessao = $idSessao;
        }

        function getIdSessao(){
            return $this->idSessao;
        }

        function setIdCadeira($idCadeira){
            $this->idCadeira = $idCadeira;
        }

        function getIdCadeira(){
            return $this->idCadeira;
        }
    }


?>