<?php
require_once __DIR__ . '/CreditCard.php';
class Customer
{
    public $name;
    public $last_name;
    public $age;
    public $credit_card;
    public $is_registered;
    public $discount;

    public function __construct($name, $last_name, $age, $credit_card, $is_registered)
    {
        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;
        $this->credit_card = $credit_card;
        $this->is_registered = $is_registered;
        $this->discount = $this->setDiscount();
    }

    public function getDiscount()
    {
        return 'Hai il ' . $this->discount . '% di sconto';
    }

    public function setDiscount()
    {
        return $this->is_registered ? $this->discount = 20 : $this->discount = 0;
    }

    public function setCreditCard($credit_card)
    {
        if (!$credit_card instanceof CreditCard) return false;
        $this->credit_card = $credit_card;
    }
}
