<?php

declare(strict_types=1);

require_once '../../classes/56/Invoice.php';
require_once '../../classes/56/InvoiceCollection.php';

use folderName\Invoice;
use folderName\InvoiceCollection;

//$invoices = new Invoices();

$invoiceCollection = new InvoiceCollection([new Invoice(15), new Invoice(25), new Invoice(50)]);

foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' - ' . $invoice->amount . '<br>';
}