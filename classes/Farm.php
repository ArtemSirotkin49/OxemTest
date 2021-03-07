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
        // получение продукции в массив products
        $products = [];
        foreach ($this->barn->getAnimals() as $animal) {
            $products[] = $animal->generateProduct();
        }
        // получение всех типов продукции в массив productTypes
        $productTypes = [];
        foreach ($products as $product) {
            $productType = explode(" ", $product, 2)[1];
            if (array_search($productType, $productTypes) === false) {
                $productTypes[] = $productType;
            }
        }
        $res = "";
        // подсчёт всей собранной продукции
        foreach ($productTypes as $productType) {
            $productNumber = 0;
            foreach ($products as $product) {
                if (explode(" ", $product, 2)[1] == $productType) {
                    $productNumber += intval(explode(" ", $product)[0]);
                }
            }
            $res .= $productNumber . " " . $productType . PHP_EOL;
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