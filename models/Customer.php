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
        $this->setCreditCard($credit_card);
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

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCreditCard()
    {
        return $this->credit_card;
    }

    public function getIsRegistered()
    {
        return $this->is_registered;
    }


    public function buyProduct($product)
    {
        if ($this->credit_card->expire < date('Y')) {
            return 'Carta di credito scaduta.';
        } else {
            if ($product->price > $this->credit_card->balance) {
                return 'Transazione Rifiutata.';
            } else {
                $this->credit_card->balance -= $product->price;
                return 'Transazione approvata. ' . 'Hai pagato: ' . $product->price . ' €';
            }
        }
    }
}
