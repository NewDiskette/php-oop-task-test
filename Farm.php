<?php

class Farm
{
    public $idAnimal;
    public $countAnimals;

    public $minProduct;
    public $maxProduct;

    public function __construct($countAnimals)
    {
        $this->countAnimals = $countAnimals;

        for($i = 1; $i <= $this->countAnimals; $i++)
        {
            $id = file_get_contents('id.txt');
            $this->idAnimal = $id + 1;
            file_put_contents('id.txt', $this->idAnimal);
            echo $this->idAnimal . ' ' . get_class($this) . ", ";
        }
    }

    public function giveProduct()
    {
        $countProduct = 0;

        for($i = 1; $i <= $this->countAnimals; $i++)
        {
            $product = random_int($this->minProduct, $this->maxProduct);
            $countProduct = $countProduct + $product;
        }
        return $countProduct;
    }
}
