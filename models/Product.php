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
        $this->details = $this->setDetails($details);
        $this->valutation = $this->getValutations($valutation);
        $this->disposability = $this->setDisposability($disposability);
    }
    // getter
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getDetails()
    {
        return $this->details;
    }
    public function getValutations($val)
    {
        return 'Voto utenti: ' . $val;
    }
    public function getDisposability()
    {
        return $this->disposability;
    }

    // Setter
    public function setDetails($details)
    {
        return substr($details, 0, 100) . '...';
    }
    public function setDisposability($disp)
    {
        if ($disp === false) {
            return 'Prodotto attualmente non disponibile';
        }
        return 'Disponibile in magazzino.';
    }
}
