<?php
require_once __DIR__. '/models/prodotto.php';
require_once __DIR__. '/models/category.php';
require_once __DIR__. '/models/type.php';

$croccantiniUno = new Cibo("Croccantini di pollo", "Cani");
var_dump($croccantiniUno);

$giocoUno = new Gioco("procione in tessuto", "gatto");
var_dump($giocoUno);

$cucciaUno = new Cuccia("fatta in legno", "cane",);
var_dump($cucciaUno)
?>