<?php
require_once __DIR__. '/prodotto.php';

class Animal {
    protected $nome;
    protected $icona;

    function __construct($_nome, $_icona) {
        $this->nome = $_nome;
        $this->icona = $_icona;
    }
}

$animale1 = new Animal('cane', 'icona-cane.png');
$animale2 = new Animal('gatto', 'icona-gatto.png');

?>