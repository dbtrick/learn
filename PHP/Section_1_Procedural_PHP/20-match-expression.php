<?php

// Match - like using ===
/*
$paymentStatus = 1;

$paymentStatusDisplay = match($paymentStatus) {
    1 => 'Paid',
    2 => 'Declined',
    3 => 'Cancelled',
    4 => 'Pending',
    0 => 'Unknown Payment Status',
};

echo $paymentStatusDisplay;
*/

//test for file 21 (goto)

declare(strict_types = 1);

require '21-return-declare-goto.php';

echo sum(5, 10);