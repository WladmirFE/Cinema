<?php
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/vo/Cliente.php";
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/dao/ClienteDAO.php";

$action = NULL;

if(isset($_GET['idDel'])){

    ClienteDAO::getInstance()->delete($_GET['idDel']);
    $action = "deletado";
}
elseif(isset($_POST)){
    $newCliente = new Cliente();

    $newCliente->setNome($_POST['nome']);
    $newCliente->setLogin($_POST['login']);
    $newCliente->setEmail($_POST['email']);
    $newCliente->setSenha($_POST['senha']);

    

    if($_POST['id']==0){
        ClienteDAO::getInstance()->insert($newCliente);
        $action = "salvo";

    }else{
        $newCliente->setId($_POST['id']);
        ClienteDAO::getInstance()->update($newCliente);
        $action = "editado";

    }
}



echo "
<script>
    alert('Cliente ".$action." com sucesso!');
    window.location='../clienteAddEdit.php';
</script>
";


?>