<?php

// switch - like using ==

$paymentStatus = 'paid';

switch ($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
        echo 'Payment Declined';
        break;

    case 'cancelled':
        echo 'Payment Cancelled';
        break;

    case 'pending':
        echo 'Payment Pending';
        break;

    default:
        echo 'Unknown Payment Status';
}
