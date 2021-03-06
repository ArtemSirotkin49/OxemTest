<?php
namespace Root\Animal;

require_once (dirname(__FILE__) . "/animal.php");

use Root\Animal\Animal as Animal;

class Cow extends Animal
{
    public function generateProduct()
    {
        return rand(8, 12) . " litres_of_milk";
    }
}