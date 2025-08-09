<?php

declare(strict_types=1);

require_once '../../classes/52/Invoices.php';

use \folderName\Invoices;

/*$invoice = new folderName\Invoices();

$invoice2 = new Invoices();

var_dump($invoice, $invoice2, \folderName\Invoices::create());*/

$invoice = new Invoices();

$invoice2 = clone $invoice;

var_dump($invoice, $invoice2, $invoice === $invoice2);


