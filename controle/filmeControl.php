<?php
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/vo/Filme.php";
require_once $_SERVER['DOCUMENT_ROOT']."/cinema/modelo/dao/FilmeDAO.php";

$action = NULL;

if(isset($_GET['idDel'])){

    FilmeDAO::getInstance()->delete($_GET['idDel']);
    $action = "deletado";
}
elseif(isset($_POST)){
    $newFilme = new Filme();

    $newFilme->setNome($_POST['nome']);
    $newFilme->setDescricao($_POST['descricao']);
    $newFilme->setFoto($_POST['foto']);

    

    if($_POST['id']==0){
        FilmeDAO::getInstance()->insert($newFilme);
        $action = "salvo";

    }else{
        $newFilme->setId($_POST['id']);
        FilmeDAO::getInstance()->update($newFilme);
        $action = "editado";

    }
}



echo "
<script>
    alert('Filme ".$action." com sucesso!');
    window.location='../filmeAddEdit.php';
</script>
";


?>