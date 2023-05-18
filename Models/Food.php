<?php
include_once __DIR__ . '/Product.php';
class Food extends Product
{
    public
    $icon;

    public function __construct($name, $cathegory, $animal, $icon, $price, $image, )
    {
        parent::__construct($name, $cathegory, $animal, $price, $image);

        $this->icon = $icon;
    }

}




?>