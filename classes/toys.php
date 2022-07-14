<?php

class Toys extends Products {

    public $color = '';
    public $material = '';
    

function __construct($_name, $_price, $_color, $_material )
{

    parent::__construct($_name, $_price);

    $this->setColor($_color);
    $this->setMaterial($_material);
    
}




    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     */
    public function setMaterial($material): self
    {
        $this->material = $material;

        return $this;
    }
}