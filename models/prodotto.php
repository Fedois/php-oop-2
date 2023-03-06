<?php

class Prodotto {
    private $nome;
    private $prezzo;
    private $razza;
    private $tipo;
    
    function __construct(string $_nome, int $_prezzo, array $_razza, string $_tipo) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->razza = $_razza;
        $this->tipo = $_tipo;
    }

    public function printProduct(){
        echo '<h2>';
        echo $this->nome;
        echo '<h2>';

        echo '<h3>';
        echo $this->prezzo, '<span>€</span>';
        echo '<h3>';

        echo '<ul>';
        foreach ($this->razza as $singleRazza) {
            echo '<li>';
            echo $singleRazza;
            echo '</li>';
        }
        echo '</ul>';


        echo '<p>';
        echo $this->tipo;
        echo '<p>';
    }
}
?>