<?php
require_once __DIR__. '/models/prodotto.php';
require_once __DIR__. '/models/animali.php';
require_once __DIR__. '/models/type.php';

// $croccantiniUno = new Cibo ("Croccantini di pollo", 5, ['gatto']);

// // var_dump($croccantiniUno);

// $giocoUno = new Gioco("procione in tessuto", 10, ['cane', 'gatto']);
// // var_dump($giocoUno);

// $cucciaUno = new Cuccia("fatta in legno", 30, ['cane']);
// // var_dump($cucciaUno)

$prodotto1 = new gioco('Ciotola per cani', 10, 'ciotola-cani.png', $animale1, 'Accessori', '2024', 'pollo');
var_dump($prodotto1)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
       
    </main>
</body>

<style>
    main{
        display: flex;
        justify-content: space-around;
    }
    .box{
        border: 1px solid black;
        padding: 10px;
    }
</style>
</html>