<?php

if (isset($_POST['email']) && isset($_POST['senha'])){

    $sql = "where email = :email and senha = :senha ";
    $arrayDeParametros = array(":email", ":senha");
    $arrayDeValores = array($_POST['email'], $_POST['senha']);

    require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/dao/ClienteDAO.php";

    $listaCliente = ClienteDAO::getInstance()->listWhere($sql, $arrayDeParametros, $arrayDeValores);

    if(count($listaCliente)>0){

        session_start();
        $_SESSION['idClienteLogado'] = $listaCliente[0]->getId();
        header("Location: ./clienteList.php");

    }else{
        header("Location: ./loginCliente.php?erro=1");
    
    }

}

