<?php
class CreditCard
{
    public $number;
    public $expire;

    public function __construct($number, $expire)
    {
        $this->number = $number;
        $this->expire = $expire;
    }
}
