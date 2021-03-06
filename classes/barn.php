<?php
namespace Root\Barn;

class Barn
{
    private $animals;
    public function __construct()
    {
        $this->animals = [];
    }

    public function addAnimal($animal)
    {
        $this->animals[] = $animal;
    }

    public function getAnimal($number) {
        foreach ($this->animals as $animal) {
            if ($animal->getNumber() == $number) {
                return $animal;
            }
        }
        return false;
    }
}