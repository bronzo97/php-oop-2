<?php

require_once __DIR__ . "/Cart.php";
require_once __DIR__ . "/PaymentHandler.php";

class Costumer {

    protected $costumerName = '';
    protected $costumerLastName = '';
    protected $registered = false;

    public PaymentHandler $paymentHandler;
    public Cart $cart;


    function __construct($_costumerName, $_costumerLastName)
    {
        $this->setCostumerName($_costumerName);
        $this->setCostumerLastName($_costumerLastName);

        $this->cart = new Cart();
        $this->paymentHandler = new PaymentHandler();

        if(isset($_costumerName)) {
            $this->register($_costumerName);
        }

    }

    function register($_costumerName) {
            
            $this->setCostumerName($_costumerName);
            $this->setRegistered(true);
    }


    /**
     * Get the value of costumerName
     */
    public function getCostumerName()
    {
        return $this->costumerName;
    }

    /**
     * Set the value of costumerName
     */
    public function setCostumerName($costumerName)
    {
        $this->costumerName = $costumerName;

        return $this;
    }

    /**
     * Get the value of costumerLastName
     */
    public function getCostumerLastName()
    {
        return $this->costumerLastName;
    }

    /**
     * Set the value of costumerLastName
     */
    public function setCostumerLastName($costumerLastName)
    {
        $this->costumerLastName = $costumerLastName;

        return $this;
    }

    /**
     * Get the value of registered
     */
    public function getRegistered()
    {

        return $this->registered;
    
    }

    /**
     * Set the value of registered
     */
    private function setRegistered($registered)
    {
        $this->registered = $registered;

        return $this;
    }

}

