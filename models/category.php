<?php
require_once __DIR__. '/prodotto.php';

class Cane extends Prodotto {
    function __construct($nome, $tipo) {
        parent::__construct($nome, 'Cani', $tipo);
    }
}

class Gatto extends Prodotto {
    function __construct($nome, $tipo) {
        parent::__construct($nome, 'Gatti', $tipo);
    }
}

?>