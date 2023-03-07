<?php
require_once __DIR__. '/prodotto.php';
require_once __DIR__. '/animali.php';
class Cibo extends Prodotto {
    public $scadenza;
    public $gusto;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animale $_animale, string $_tipo, string $_scadenza, string $_gusto) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animale, $_tipo);
        $this->scadenza = $_scadenza;
        $this->gusto = $_gusto;
    }
}

class Gioco extends Prodotto {
    public $materiale;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animale $_animale, string $_tipo, string $_materiale) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animale, $_tipo);
        $this->materiale = $_materiale;
    }
}

class Cuccia extends Prodotto {
    public $materiale;
    public $dimensioni;

    function __construct(string $_nome, int $_prezzo, string $_immagine, Animale $_animale, string $_tipo, string $_materiale, string $_dimensioni) {
        parent::__construct($_nome, $_prezzo, $_immagine, $_animale, $_tipo);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
    }
}



?>