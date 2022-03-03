<?php
// iscritto o non iscritto e sconto iscritto
class User
{
    public $nickname;
    public $discount;
    public $registered;

    public function __construct($nickname, $discount, $registered)
    {
        $this->nickname = $nickname;
        $this->discount = $discount;
        $this->registered = $registered;
    }
}
