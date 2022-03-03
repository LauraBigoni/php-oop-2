<?php
require_once __DIR__ . '/Product.php';

class Material extends Product
{
    public $materials;

    public function __construct($name, $price, $description, $details, $valutation, $materials, $disposability)
    {
        parent::__construct($name, $price, $description, $details, $valutation, $disposability);
        $this->materials = $materials;
    }
}
