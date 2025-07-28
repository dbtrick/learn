<?php

require_once '../../classes/40/Paddle/Status.php';
require __DIR__ . '/../../vendor/autoload.php';

use folderName\Paddle\Transaction;
use folderName\Status\Status;

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);