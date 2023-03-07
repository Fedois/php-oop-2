<?php 

trait Nome{
    public $nome;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome = $nome;
    }
}

?>