<?php

require_once '../../classes/38/Stripe/Transaction.php';
require_once '../../classes/38/Paddle/Transaction.php';
require_once '../../classes/38/Paddle/CustomerProfile.php';

/*use folderName\Paddle\Transaction;

var_dump(new Transaction());*/

/**
 * what if we need to use both Stripe and Paddle transaction? we need to use alias using "as" keyword
 * we can group the classes if it's on the same namespace
 */

use folderName\Paddle\{Transaction, CustomerProfile};
use folderName\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$paddleCustomerProfile = new CustomerProfile();
$stripeTransaction = new StripeTransaction();

var_dump($paddleTransaction, $paddleCustomerProfile, $stripeTransaction);





