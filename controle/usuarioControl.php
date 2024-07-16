<?php
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/vo/Usuario.php";
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/dao/UsuarioDAO.php";

$newUsuario = new Usuario();

$newUsuario->setNome($_POST['nome']);
$newUsuario->setLogin($_POST['login']);
$newUsuario->setEmail($_POST['email']);
$newUsuario->setSenha($_POST['senha']);

UsuarioDAO::getInstance()->insert($newUsuario);

?>