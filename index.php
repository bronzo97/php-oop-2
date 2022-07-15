<?php

require "classes/products.php";
require "classes/user.php";
require "classes/payment_method.php";


$prodotto1 = new Toys('ball', 12, 'red', 'rubber');
$prodotto2 = new Food('crocchette', 4.99, '05-23', ['chicken', 'meat', 'flour']);


var_dump($prodotto1);
var_dump($prodotto2);
