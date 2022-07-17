<?php

require "classes/products.php";
require "classes/costumer.php";
require "classes/PaymentHandler.php";


$costumer1 = new Costumer('' ,'Rossi');

try {
    $customer->register("Mario", null);
} catch (Exception $e) {
    echo "Impossibile registrare l'utente. Dati inseriti non validi.";
}


$prodotto1 = new Toys('ball', 12, 'red', 'rubber' );
$prodotto2 = new Food('crocchette', 4.99, '05-23', ['chicken', 'meat', 'flour']);


var_dump($costumer1);
var_dump($prodotto1);
var_dump($prodotto2);
