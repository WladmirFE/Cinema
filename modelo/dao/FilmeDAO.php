<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cinema/modelo/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/cinema/modelo/vo/Filme.php';

class FilmeDAO {

    public static $instance;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new FilmeDAO();

        return self::$instance;
    }

    public function insert(Filme $filme) {
        try {
            $sql = "INSERT INTO filme (nome, descricao, foto)"
                    . "VALUES (:nome, :descricao, :foto)";

            $p_sql = BDPDO::getInstance()->prepare($sql);


            $p_sql->bindValue(":nome", $filme->getNome());
            $p_sql->bindValue(":descricao", $filme->getDescricao());
            $p_sql->bindValue(":foto", $filme->getFoto());


            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de salvar" . $e->getMessage();
        }
    }

    public function update($filme) {
        try {
            $sql = "UPDATE filme SET nome=:nome, descricao=:descricao, foto=:foto where id=:id";

            $p_sql = BDPDO::getInstance()->prepare($sql);

            $p_sql->bindValue(":nome", $filme->getNome());
            $p_sql->bindValue(":descricao", $filme->getDescricao());
            $p_sql->bindValue(":foto", $filme->getFoto());

            $p_sql->bindValue(":id", $filme->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de atualizar" . $e->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = "delete from filme where id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao executar a função de deletar --" . $e->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM filme WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Filme();
        $obj->setId($row['id']);
        $obj->setNome($row['nome']);
        $obj->setDescricao($row['descricao']);
        $obj->setFoto($row['foto']);
        return $obj;
    }

    public function listAll() {
        try {
            $sql = "SELECT * FROM filme ";
            $p_sql = BDPDO::getInstance()->prepare($sql);

            $p_sql->execute();

            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
        }
    }

    public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores) {
        try {
            $sql = "SELECT * FROM filme " . $restanteDoSQL;
            $p_sql = BDPDO::getInstance()->prepare($sql);
            for ($i = 0; $i < sizeof($arrayDeParametros); $i++) {
                $p_sql->bindValue($arrayDeParametros[$i], $arrayDeValores [$i]);
            }
            $p_sql->execute();
            $lista = array();
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            while ($row) {
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
                $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            }
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.".$e->getMessage();
        }
    }

}

?>