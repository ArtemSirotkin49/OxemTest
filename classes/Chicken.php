<?php
namespace Root\Animal;

use Root\Animal\Animal as Animal;

class Chicken extends Animal
{
    private static string $production = "eggs";

    public function generateProduct()
    {
        return rand(0, 1);
    }

    public function getProduction()
    {
        return self::$production;
    }
}