<?php
class product
{
    public $name, $animal, $price, $image;

    public function __construct($name, $animal, $price, $image)
    {
        $this->animal = $animal;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}




?>