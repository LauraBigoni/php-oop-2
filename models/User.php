<?php
require_once __DIR__ . '/Product.php';

// iscritto o non iscritto e sconto iscritto
class User
{
    public $discount;
    public $registered;

    public function __construct($discount, $registered)
    {
        $this->discount = $discount;
        $this->registered = $registered;
    }
}
