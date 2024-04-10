<?php

class Filme{

    private $id;
    private $nome;
    private $descricao;
    private $foto;
    private $banner;
    private $duracao;

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
        $this->Foto = $foto;

    }

    function getFoto(){
        return $this->foto;
    }

    function setBanner($banner){
        $this->banner = $banner;
    }

    function getBanner(){
        return $this->banner;
    }

    function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    function getDuracao(){
        return $this->duracao;
    }



}

?>