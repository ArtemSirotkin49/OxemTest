<?php
namespace Root\Animal;

use Root\Animal\Animal as Animal;

class Chicken extends Animal
{
    public function generateProduct()
    {
        return rand(0, 1) . " eggs";
    }
}