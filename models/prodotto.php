<?php

class Prodotto {
    private $nome;
    private $prezzo;
    private $razza;
    private $tipo;
    
    function __construct(string $_nome, int $_prezzo, array $_razza, string $_tipo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->razza = $_razza;
        $this->tipo = $_tipo;
    }
}
?>