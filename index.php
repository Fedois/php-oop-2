<?php
require_once __DIR__. '/models/prodotto.php';
require_once __DIR__. '/models/animali.php';
require_once __DIR__. '/models/tipo.php';

$animale1 = new Animale('cane', 'icona-cane.png');
$animale2 = new Animale('gatto', 'icona-gatto.png');

$prodotti = [];

try{
    $prodotto1 = new cibo('Ciotola per cani', 10, 'ciotola-cani.png', $animale2, 'cibo', '14/05/2024', 'pollo');
    $prodotto2 = new gioco('osso', 5, 'gioco-cani.png', $animale1, 'gioco', 'gomma',);
    $prodotto3 = new cuccia('cuccia grande', 40, 'cuccia-cani.png', $animale1, 'cuccia', 'legno', '2x2');
} 
catch (Exception $e){
    echo 'Errore: devi aggiungere un prezzo';
    exit;
}


$prodotti[] = $prodotto1;
$prodotti[] = $prodotto2;
$prodotti[] = $prodotto3;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php zoo</title>
</head>
<body>
<main>
       <?php 
       
       foreach ($prodotti as $prodotto) {
            
            echo '<div>';
            echo '<h2>' . $prodotto->nome . '</h2>';
            echo '<img src="' . $prodotto->immagine . '" alt="' . $prodotto->nome . '">';
            echo '<p>Prezzo: ' . $prodotto->prezzo . ' €</p>';
            echo '<p>Categoria: ' . $prodotto->animale->nome . '</p>';
            echo '<p>Tipo: ' . $prodotto->tipo . '</p>';
            if ($prodotto instanceof Cibo) {
                echo '<p>Scadenza: ' . $prodotto->scadenza . '</p>';
                echo '<p>Gusto: ' . $prodotto->gusto . '</p>';
            } elseif ($prodotto instanceof Gioco) {
                echo '<p>Materiale: ' . $prodotto->materiale . '</p>';
            } elseif ($prodotto instanceof Cuccia) {
                echo '<p>Materiale: ' . $prodotto->materiale . '</p>';
                echo '<p>Dimensioni: ' . $prodotto->dimensioni . '</p>';
            }
            echo '</div>';
        }
       
       ?>
    </main>
</body>

<style>
    main{
        display: flex;
        justify-content: space-around;
    }
    div{
        border: 1px solid black;
        padding: 10px;
    }
</style>
</html>