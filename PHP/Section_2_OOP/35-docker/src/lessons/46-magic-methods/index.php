<?php

require_once '../../classes/46/Invoice.php';

use \folderName\Invoice;

$invoice = new Invoice();

/*$invoice->amount = 15;

var_dump($invoice);*/

$invoice->amount = 15;
var_dump(isset($invoice->amount));
unset($invoice->amount);
var_dump(isset($invoice->amount));
