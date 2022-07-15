<?php

class Food extends Products {

    protected $expire = '';
    protected $ingredients = '';   

    function __construct($_name, $_price, $_expire, $_ingredients) 
    {   

        parent::__construct($_name, $_price);    
    
            $this->setExpire($_expire);
            $this->setIngredients($_ingredients);
    
    }


    /**
     * Get the value of expire
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set the value of expire
     */
    public function setExpire($expire): self
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get the value of ingredients
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set the value of ingredients
     */
    public function setIngredients($ingredients): self
    {
        $this->ingredients = $ingredients;

        return $this;
    }
}