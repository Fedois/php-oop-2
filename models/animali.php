<?php
require_once __DIR__. '/prodotto.php';

class Animale {
    public $nome;
    public $icona;

    function __construct($_nome, $_icona) {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
}

?>