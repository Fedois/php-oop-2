<?php
require_once __DIR__. '/animali.php';
require_once __DIR__. '/../traits/nome.php';

class Prodotto {
    use Nome;
    // public $nome;
    public $prezzo;
    public $immagine;
    public $animale;
    public $tipo;
    
    function __construct(string $_nome, int $_prezzo, string $_immagine, Animale $_animale, string $_tipo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->immagine = $_immagine;
        $this->animale = $_animale;
        $this->tipo = $_tipo;
    }

   
}

?> 