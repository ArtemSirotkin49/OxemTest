<?php
namespace Root\Farm;

require_once (dirname(__FILE__) . "/barn.php");

use Root\Barn\Barn as Barn;

class Farm
{
    private $animalNumbers;
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
        foreach ($this->animalNumbers as $animalNumber) {
            if (($animal = $this->barn->getAnimal($animalNumber)) != false) {
                $products[] = $animal->generateProduct();
            }
        }
        $productTypes = [];
        foreach ($products as $product) {
            $productType = explode(" ", $product)[1];
            if (array_search($productType, $productTypes) === false) {
                $productTypes[] = $productType;
            }
        }
        $res = "";
        foreach ($productTypes as $productType) {
            $productNumber = 0;
            foreach ($products as $product) {
                if (explode(" ", $product)[1] == $productType) {
                    $productNumber += intval(explode(" ", $product)[0]);
                }
            }
            $res .= $productNumber . " " . $productType . PHP_EOL;
        }
        $this->harvesting[] = $res;
        return $res;
    }

    public function addAnimal($animal)
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