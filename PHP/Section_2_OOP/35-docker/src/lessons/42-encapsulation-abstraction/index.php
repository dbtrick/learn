<?php

declare(strict_types=1);

require_once '../../classes/42/Transaction.php';

use folderName\Transaction as Transaction;

$transaction = new Transaction(25.1);

echo $transaction->getAmount();

//$transaction->process();
