<?php

/**
 * -you can use :extend: keyword to extend the interfaces
 * - you can't create properties on interfaces, but you can create constant
 * - make sure to load first the interface before the class that uses the interfaces
 */

require_once '../../classes/45/DebtCollector.php';
require_once '../../classes/45/CollectionAgency.php';
require_once '../../classes/45/DebtCollectionService.php';
require_once '../../classes/45/Rocky.php';

use \folderName\DebtCollector;
use \folderName\CollectionAgency;
use \folderName\DebtCollectionService;
use \folderName\Rocky;

//$collector = new \folderName\CollectionAgency();

//echo $collector->collect(100) . PHP_EOL;

$service = new \folderName\DebtCollectionService();

echo $service->collectDebt(new folderName\Rocky()) . PHP_EOL;


