<?php

require_once __DIR__. '/prodotto.php';

class Cibo extends Prodotto {
    function __construct($nome, $categoria) {
        parent::__construct($nome, $categoria, "Cibo");
    }
}

class Gioco extends Prodotto {
    function __construct($nome, $categoria) {
        parent::__construct($nome, $categoria, "Gioco");
    }
}

class Cuccia extends Prodotto {
    function __construct($nome, $categoria) {
        parent::__construct($nome, $categoria, "Cuccia");
    }
}


?>