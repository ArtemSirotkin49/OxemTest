<?php
namespace Root\Animal;

class Animal
{
    protected $number;

    public function generateProduct() {}

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }
}