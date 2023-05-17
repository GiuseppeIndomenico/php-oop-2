<?php
class product
{
    public $name, $cathegory, $animal, $price, $image;

    public function __construct($name, $cathegory, $animal, $price, $image)
    {
        $this->animal = $animal;
        $this->cathegory = $cathegory;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}




?>