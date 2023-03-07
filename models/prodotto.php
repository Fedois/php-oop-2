<?php
require_once __DIR__. '/animali.php';

class Prodotto {
    protected $nome;
    protected $prezzo;
    protected $immagine;
    protected $razza;
    protected $tipo;
    
    function __construct(string $_nome, int $_prezzo, string $_immagine, Animal $_razza, string $_tipo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->razza = $_razza;
        $this->tipo = $_tipo;
    }

   
}

?> 