<?php

    class Sessao{

        private $id;
        private $data;
        private $hora;
        private $idFilme;
        private $idSala;

        function toString(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setData($data){
            $this->data = $data;
        }

        function getData(){
            return $this->data;
        }

        function setHora($hora){
            $this->hora = $hora;
        }

        function getHora(){
            return $this->hora;
        }

        function setIdFilme($idFilme){
            $this->idFilme = $idFilme;
        }

        function getIdFilme(){
            return $this->idFilme;
        }

        function setIdSala($idSala){
            $this->idSala = $idSala;
        }

        function getIdSala(){
            return $this->idSala;
        }
    }


?>