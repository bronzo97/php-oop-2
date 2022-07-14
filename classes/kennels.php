<?php 

class kennels extends Products {

    public $size = '';
    public $material = '';


function __construct($_size, $_material)
{
    $this->getSize($_size);
    $this->getMaterial($_material);
}



    /**
     * Get the value of size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     */
    public function setSize($size): self
    {
        $this->size = $size;

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