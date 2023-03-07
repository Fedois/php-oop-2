<?php
require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/../traits/nome.php';

class Animale {
    use Nome;
    // public $nome;
    public $icona;

    function __construct($_nome, $_icona) {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
}

?>