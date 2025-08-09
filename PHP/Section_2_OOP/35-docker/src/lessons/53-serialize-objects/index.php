<?php

/**
 * serialization - converting the data to string
 * unserialization - returning the string data to it's original data
 */

declare(strict_types=1);

require_once '../../classes/53/Invoice.php';

use \folderName\Invoice;

/*$invoice = new Invoice();

echo serialize(true) . "<br>";
echo serialize(1) . "<br>";
echo serialize(2.5) . "<br>";
echo serialize('hello world') . "<br>";
echo serialize([1,2,3]) . "<br>";
echo serialize(['a' => 1, 'b' => 2, 'c' => 3]) . "<br>";*/

$invoice = new Invoice(25, 'Invoice 1', '123456789');

$str = serialize($invoice);

$invoice2 = unserialize($str);

var_dump($invoice2);



