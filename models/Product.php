<?php
class Product
{
    public $name;
    public $price;
    public $description;
    public $disposability;

    public function __construct($name, $price, $description, $disposability)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->disposability = $disposability;
    }
    public function setDisposability($disp)
    {
        if ($disp === false) {
            return 'Prodotto attualmente non disponibile.';
        }
        return 'Disponibile in magazzino.';
    }
    public function getDisposability()
    {
        return $this->disposability;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}
