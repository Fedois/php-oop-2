<?php

require_once __DIR__. '/prodotto.php';

class Cibo extends Prodotto {
    function __construct($nome, $prezzo, $razza) {
        parent::__construct($nome, $prezzo, $razza, "Cibo");
    }
}

class Gioco extends Prodotto {
    function __construct($nome, $prezzo, $razza) {
        parent::__construct($nome, $prezzo, $razza, "Gioco");
    }
}

class Cuccia extends Prodotto {
    function __construct($nome, $prezzo,$razza) {
        parent::__construct($nome, $prezzo, $razza, "Cuccia");
    }
}


?>