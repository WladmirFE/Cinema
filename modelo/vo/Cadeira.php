<?php

class Cadeira{
    private $id;
    private $disponivel;
    private $x;
    private $y;
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

    function setDisponivel($disponivel){
        $this->disponivel = $disponivel;
    }

    function getDisponivel(){
        return $this->disponivel;
    }

    function setX($x){
        $this->x = $x;
    }

    function getX(){
        return $this->x;
    }

    function setY($y){
        $this->y = $y;
    }

    function getY(){
        return $this->y;
    }

    function setIdSala($idSala){
        $this->idSala = $idSala;
    }

    function getIdSala(){
        return $this->idSala;
    }

}

?>