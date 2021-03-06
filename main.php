<?php
require_once (dirname(__FILE__) . "/classes/barn.php");
require_once (dirname(__FILE__) . "/classes/chicken.php");
require_once (dirname(__FILE__) . "/classes/cow.php");
require_once (dirname(__FILE__) . "/classes/farm.php");

use \Root\Animal\Chicken as Chicken;
use \Root\Animal\Cow as Cow;
use \Root\Farm\Farm as Farm;

$farm = new Farm();
for ($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow());
}
for ($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken());
}

echo $farm->getProducts();

