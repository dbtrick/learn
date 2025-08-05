<?php

/**
 * Static Properties & Methods
 * - Late static binding
 * - Early Binding (Happens during compile time)
 * - Late Binding (Happens during runtime)
 */

require_once '../../classes/47/ClassA.php';
require_once '../../classes/47/ClassB.php';

use \folderName\ClassA;
use \folderName\ClassB;

/*$classA = new ClassA();
$classB = new ClassB();

echo $classA->getName() . PHP_EOL;
echo $classB->getName() . PHP_EOL;*/

/**
 * Early binding
 */
echo  \folderName\ClassA::getName() . "\n";
echo  \folderName\ClassB::getName() . "\n";