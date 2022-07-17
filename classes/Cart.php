<?php

    class Cart {


        private $products = [];

        public function add(...$_products)
        {
            array_push($this->products, ...$_products);
        }

        public function remove() {

        } 


    }

?>