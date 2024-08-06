<?php
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/vo/Usuario.php";
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/dao/UsuarioDAO.php";

$action = NULL;

if(isset($_GET['idDel'])){

    UsuarioDAO::getInstance()->delete($_GET['idDel']);
    $action = "deletado";
}
elseif(isset($_POST)){
    $newUsuario = new Usuario();

    $newUsuario->setNome($_POST['nome']);
    $newUsuario->setLogin($_POST['login']);
    $newUsuario->setEmail($_POST['email']);
    $newUsuario->setSenha($_POST['senha']);

    

    if($_POST['id']==0){
        UsuarioDAO::getInstance()->insert($newUsuario);
        $action = "salvo";

    }else{
        $newUsuario->setId($_POST['id']);
        UsuarioDAO::getInstance()->update($newUsuario);
        $action = "editado";

    }
}



echo "
<script>
    alert('Usuario ".$action." com sucesso!');
    window.location='../usuarioAddEdit.php';
</script>
";


?>