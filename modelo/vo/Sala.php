<?php

    class Sala{
        private $id;
        private $quantiCadeira;

        function toString(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setQuantiCadeira($quantiCadeira){
            $this->quantiCadeira = $quantiCadeira;
        }

        function getQuantiCadeira(){
            return $this->quantiCadeira;
        }
    }




?>