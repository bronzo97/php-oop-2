<?php

class Costumer {

    protected $costumerName = '';
    protected $costumerLastName = '';

    function __construct($_costumerName, $_costumerLastName)
    {
        $this->setCostumerName($_costumerName);
        $this->setCostumerLastName($_costumerLastName);
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
    public function setCostumerName($costumerName): self
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
    public function setCostumerLastName($costumerLastName): self
    {
        $this->costumerLastName = $costumerLastName;

        return $this;
    }
}

