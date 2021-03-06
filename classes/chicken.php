<?php
namespace Root\Animal;

require_once (dirname(__FILE__) . "/animal.php");

use Root\Animal\Animal as Animal;

class Chicken extends Animal
{
    public function generateProduct()
    {
        return rand(0, 1) . " eggs";
    }
}