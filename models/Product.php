<?php

class Product
{
    public $name;
    public $price;
    public $description;
    public $details;
    public $valutation;
    public $disposability;

    public function __construct($name, $price, $description, $details, $valutation, $disposability)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->details = $details;
        $this->valutation = $valutation;
        $this->disposability = $disposability;
    }
    
}
