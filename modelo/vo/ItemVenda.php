<?php

    class ItemVenda{

        private $id;
        private $precoUnitario;
        private $quantidade;
        private $idVenda;
        private $idIngresso;
        private $idProduto;

        function toString(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setPrecoUnitario($precoUnitario){
            $this->precoUnitario = $precoUnitario;
        }

        function getPrecoUnitario(){
            return $this->precoUnitario;
        }

        function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }

        function getQuantidade(){
            return $this->quantidade;
        }

        function setIdVenda($idVenda){
            $this->idVenda = $idVenda;
        }

        function getIdVenda(){
            return $this->idVenda;
        }

        function setIdIngresso($idIngresso){
            $this->idIngresso = $idIngresso;
        }

        function getIdIngresso(){
            return $this->idIngresso;
        }

        function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }

        function getIdProduto(){
            return $this->idProduto;
        }
        
    }



?>