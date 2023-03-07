<?php
require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/animali.php';
class Cibo extends Prodotto {
    protected $scadenza;
    protected $gusto;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animal $_animal, string $_tipo, string $_scadenza, string $_gusto) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animal, $_tipo);
        $this->scadenza = $_scadenza;
        $this->gusto = $_gusto;
    }
}

class Gioco extends Prodotto {
    protected $materiale;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animal $_animal, string $_tipo, string $_materiale) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animal, $_tipo);
        $this->materiale = $_materiale;
    }
}

class Cuccia extends Prodotto {
    protected $materiale;
    protected $dimensioni;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animal $_animal, string $_tipo, string $_materiale, string $_dimensioni) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animal, $_tipo);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
    }
}



?>