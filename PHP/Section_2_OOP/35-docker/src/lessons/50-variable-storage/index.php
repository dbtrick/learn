<?php

/**
 * Object Comparison
 * -zend value (zval)
 */

require_once '../../classes/50/Invoice.php';

use \folderName\Invoice;

$invoice1 = new Invoice(25, 'My Invoice 1');
$invoice2 = new Invoice(100, 'My Invoice 1');

echo 'invoice1 == invoice2: ' .  PHP_EOL;

var_dump($invoice1 == $invoice2);

echo 'invoice1 === invoice2: ' .  PHP_EOL;
var_dump($invoice1 === $invoice2);