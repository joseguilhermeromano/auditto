<?php 

class Produto{
    private $emissaoData;
    private $emitenteDocumento;
    private $descricao;

    public function getEmissaoData(){
        return $this->emissaoData;
    }

    public function setEmissaoData($emissaoData){
        $this->emissaoData = $emissaoData;
    }

    public function getEmitenteDocumento(){
        return $this->emitenteDocumento;
    }

    public function setEmitenteDocumento($emitenteDocumento){
        $this->emitenteDocumento = $emitenteDocumento;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}