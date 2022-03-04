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

    public function getExpire()
    {
        return $this->expire;
    }
    public function setExpire($expire): self
    {
        $this->expire = $expire;

        return $this;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }
}
