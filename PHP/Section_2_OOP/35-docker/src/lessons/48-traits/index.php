<?php

/**
 * Traits
 * - shares multiple classes(inheritance)
 */

require_once '../../classes/48/CoffeeMaker.php';
require_once '../../classes/48/LatteMaker.php';
require_once '../../classes/48/CappuccinoMaker.php';
require_once '../../classes/48/AllinOneCoffeeMaker.php';

use \folderName\CoffeeMaker;
use \folderName\LatteMaker;
use \folderName\CappuccinoMaker;
use \folderName\AllinOneCoffeeMaker;

$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappuccinoMaker = new CappuccinoMaker();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappucino();






