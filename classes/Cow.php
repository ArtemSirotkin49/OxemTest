<?php
namespace Root\Animal;

use Root\Animal\Animal as Animal;

class Cow extends Animal
{
    private static string $production = "litres of milk";

    public function generateProduct()
    {
        return rand(8, 12);
    }

    public function getProduction()
    {
        return self::$production;
    }
}