<?php

require_once '../../classes/41/Transaction.php';

use folderName\Transaction as Transaction;

$transaction = new Transaction(25, 'transaction 1');

var_dump(\folderName\Transaction::$count);
