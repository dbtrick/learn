<?php

namespace folderName;

require_once 'MissingBillingInfoException.php';

use \folderName\MissingBillingInfoException;

class Invoice
{
    public function __construct(public Customer $customer)
    {

    }

    /**
     * @throws \Exception
     */
    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException("Incorrect amount to process");
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException();
        }

        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OK' . '<br/>';
    }
}