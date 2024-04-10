<?php

    class FluxoFinanceiro{

        private $id;
        private $descricao;
        private $dataVencimento;
        private $dataPagamento;
        private $valor;
        private $fluxo;
        private $situacao;
        private $idUsuario;
        private $idVenda;

        function toString(){
            return $this->id;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        function getDescricao(){
            return $this->descricao;
        }

        function setDataVencimento($dataVencimento){
            $this->dataVencimento = $dataVencimento;
        }

        function getDataVencimento(){
            return $this->dataVencimento;
        }

        function setDataPagamento($dataPagamento){
            $this->dataPagamento = $dataPagamento;
        }

        function getDataPagamento(){
            return $this->dataPagamento;
        }

        function setValor($valor){
            $this->valor = $valor;
        }

        function getValor(){
            return $this->valor;
        }

        function setFluxo($fluxo){
            $this->fluxo = $fluxo;
        }

        function getFluxo(){
            return $this->fluxo;
        }

        function setSituacao($situacao){
            $this->situacao = $situacao;
        }

        function getSituacao(){
            return $this->situacao;
        }

        function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        function getIdUsuario(){
            return $this->idUsuario;
        }

        function setVenda($idVenda){
            $this->idVenda = $idVenda;
        }

        function getIdVenda(){
            return $this->idVenda;
        }

    }


?>