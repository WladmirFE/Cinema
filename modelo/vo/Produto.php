<?php

class Produto{

    private $id;
    private $nome;
    private $quantidade;

    function toString(){
        return $this->nome;
    }

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    function getQuantidade(){
        return $this->quantidade;
    }

}


?>