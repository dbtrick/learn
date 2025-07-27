<?php

require_once '../../classes/37/Transaction37.php';
require_once '../../classes/37/PaymentProfile.php';
require_once '../../classes/37/Customer.php';

$transaction = new Transaction37(5, 'test');

$transaction->getCustomer()?->getPaymentProfile()?->id;



