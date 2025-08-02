<?php

/**
 * -you can use :extend: keyword to extend the interfaces
 * - you can't create properties on interfaces, but you can create constant
 */

require_once '../../classes/45/CollectionAgency.php';
require_once '../../classes/45/DebtCollector.php';
require_once '../../classes/45/DebtCollectionService.php';

use \folderName\DebtCollector;
use \folderName\CollectionAgency;

$service = new \folderName\DebtCollectionService();

echo $service->collectDebt(new folderName\CollectionAgency()) . PHP_EOL;

