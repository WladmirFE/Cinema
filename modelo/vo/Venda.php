<?php

class Venda{

    private $id;
    private $data;
    private $hora;
    private $idCliente;
    private $idVendedor;

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

    function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }

    function getIdCliente(){
        return $this->idCliente;
    }

    function setIdVendedor($idVendedor){
        $this->idVendedor = $idVendedor;
    }

    function getIdVendedor(){
        return $this->idVendedor;
    }


}

?>