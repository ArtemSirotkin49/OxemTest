<?php
namespace Root\Animal;

use Root\Animal\Animal as Animal;

class Cow extends Animal
{
    public function generateProduct()
    {
        return rand(8, 12) . " litres of milk";
    }
}