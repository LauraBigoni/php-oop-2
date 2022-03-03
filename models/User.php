<?php

// iscritto o non iscritto e sconto iscritto
class User
{
    public $discount;
    public $registered;

    public function __construct($discount, $registered)
    {
        $this->discount = $this->setDiscount($discount);
        $this->registered = $this->setRegistered($registered);
    }

    public function getDiscount()
    {
        return $this->discount;
    }
    public function getRegistered()
    {
        return $this->registered;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function setRegistered($r)
    {
        if ($r === true) return true;
        return false;
    }
}
