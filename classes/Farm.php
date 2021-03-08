<?php
namespace Root\Farm;

use Root\Barn\Barn as Barn;
use Root\Animal\Animal as Animal;

class Farm
{
    private $harvesting;
    private Barn $barn;
    public function __construct()
    {
        $this->barn = new Barn();
        $this->animalNumbers = [];
        $this->harvesting = [];
    }

    public function getProducts()
    {
        $products = [];
        foreach ($this->barn->getAnimals() as $animal) {
            $products[$animal->getProduction()][] = $animal->generateProduct();
        }
        $res = "";
        foreach ($products as $production => $arValues) {
            $summ = 0;
            foreach ($arValues as $value) {
                $summ += $value;
            }
            $res .= $summ . " " . $production . PHP_EOL;
        }
        $this->harvesting[] = $res;
        return $res;
    }

    public function addAnimal(Animal $animal)
    {
        $number = count($this->animalNumbers) + 1;
        $this->animalNumbers[] = $number;
        $animal->setNumber($number);
        $this->barn->addAnimal($animal);
    }

    public function getHarvesting()
    {
        return $this->harvesting;
    }
}