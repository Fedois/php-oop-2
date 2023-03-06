<?php

class Prodotto {
    private $nome;
    private $categoria;
    private $tipo;
    
    function __construct(string $nome, string $categoria, string $tipo) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
    }
}
?>