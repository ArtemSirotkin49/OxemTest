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
            if (!empty($products[$animal->getProduction()])) {
                $products[$animal->getProduction()] += $animal->generateProduct();
                continue;
            }
            $products[$animal->getProduction()] = $animal->generateProduct();
        }
        $res = "";
        foreach ($products as $production => $value) {
            $res .= $value . " " . $production . PHP_EOL;
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