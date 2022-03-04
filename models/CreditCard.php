<?php
class CreditCard
{
    public $number;
    public $expire;
    public $balance;

    public function __construct($number, $expire, $balance)
    {
        $this->number = $number;
        $this->expire = $expire;
        $this->balance = $balance;
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
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance($balance): self
    {
        $this->balance = $balance;

        return $this;
    }
}
