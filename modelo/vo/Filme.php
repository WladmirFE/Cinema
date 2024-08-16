<?php

class Filme{

    private $id;
    private $nome;
    private $descricao;
    private $foto;

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

    function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    function getDescricao(){
        return $this->descricao;
    }

    function setFoto($foto){
        $this->foto = $foto;

    }

    function getFoto(){
        return $this->foto;
    }

}

?>