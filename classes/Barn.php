<?php
namespace Root\Barn;

use Root\Animal\Animal as Animal;

class Barn
{
    private $animals;
    public function __construct()
    {
        $this->animals = [];
    }

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function getAnimals() {
        return $this->animals;
    }
}