<?php

// Constants

// can use in control structure
define("status_paid","paid");

echo defined("status_paid");


// can't use in control structure
const status_paid2 = "notPaid";

echo status_paid2;

// Variable Variables
$foo = 'bar';

$$foo = 'baz';

echo " $foo , ${$foo}";




