<?php 

require "food.php";
require "toys.php";
require "kennels.php";

class Products {

    protected $name = '';
    protected $price = '';

    function __construct($_name, $_price)
    {
        $this->setName($_name);
        $this->setPrice($_price);
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
}

