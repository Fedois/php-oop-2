<?php
require_once __DIR__. '/models/prodotto.php';
require_once __DIR__. '/models/type.php';

$croccantiniUno = new Cibo ("Croccantini di pollo", 5, ['gatto']);
var_dump($croccantiniUno);

$giocoUno = new Gioco("procione in tessuto", 10, ['cane', 'gatto']);
var_dump($giocoUno);

$cucciaUno = new Cuccia("fatta in legno", 30, ['cane']);
var_dump($cucciaUno)
?>