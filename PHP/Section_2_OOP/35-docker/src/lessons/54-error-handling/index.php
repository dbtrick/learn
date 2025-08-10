<?php

declare(strict_types=1);

require_once '../../classes/54/Invoice.php';
require_once '../../classes/54/Customer.php';

use \folderName\Invoice;
use \folderName\Customer;

/*$invoice = new Invoice(new Customer());

try {
    $invoice->process(25);
} catch (\folderName\MissingBillingInfoException $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine();
}*/

set_exception_handler(function (\throwable $exception) {
    var_dump($exception->getMessage());
});

echo array_rand([], 1);

$invoice = new Invoice(new Customer());

$invoice->process(25);
