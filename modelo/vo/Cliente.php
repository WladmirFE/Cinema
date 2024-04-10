<?php

class Cliente{
    private $id;
    private $nome;
    private $login;
    private $email;
    private $senha;

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

    function setLogin($login){
        $this->login = $login;
    }

    function getLogin(){
        return $this->login;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getEmail(){
        return $this->email;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function getSenha(){
        return $this->senha;
    }

}


?>