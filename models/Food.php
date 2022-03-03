<?php
require_once __DIR__ . '/Product.php';


class Food extends Product
{
    public $ingredients;

    public function __construct($name, $price, $description, $details, $valutation, $ingredients, $disposability)
    {
        parent::__construct($name, $price, $description, $details, $valutation, $disposability);
        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        if (empty($this->ingredients)) {
            return 'Nessuna informazione disponibile per questo prodotto.';
        };
        return 'Lista ingredienti: ' . $this->ingredients;
    }
}
