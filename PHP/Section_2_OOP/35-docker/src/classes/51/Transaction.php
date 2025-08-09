<?php

namespace folderName;

class Transaction
{
    /**
     * @var \Customer
     */
    private $customer;

    /**
     * @var float
     */
    private $amount;

    /**
     * @param Customer $customer
     * @param float $amount
     * @return bool
     *
     * @throws \RuntimeException
     *
     *
     *
     */
    public function process($customer, $amount)
    {
        // process transaction

        // if failed, return false

        // otherwise return true

        return true;
    }
}