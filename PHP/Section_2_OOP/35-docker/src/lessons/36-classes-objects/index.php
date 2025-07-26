<?php

declare(strict_types=1);

use LessonClasses\Transaction;

require_once '../../classes/Transaction.php';

$transaction1 = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$transaction2 = (new Transaction(200, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());